<?php

namespace App\Http\Controllers;

use App\Models\DetailQrCode;
use App\Models\GenereteQrCode;
use App\Models\GenereteQrCodeLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class GenereteQrCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_absen' => 'required|min:4',
            'id_departemen' => 'required|min:4',
            'id_sub_departemen' => 'required|min:4',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()->first(),
                'data'    => [],
            ], 422);
        }

        try {
            // khusus untuk HoD
            $mappingSubDeptToDept = [
                'DS036' => 'DP014', //HR & LEGAL
                'DS037' => 'DP016', //Procurement & GA
                'DS014' => 'DP011', //IT
                'DS047' => 'DP007', //Operational
                'DS049' => 'DP006', //Maintenance
                'DS010' => 'DP013', //Finance & Accounting
                'DS046' => 'DP005', //Inpark Revenue
                'DS019' => 'DP008', //Sales
                // kurang marketing
            ];

            $query = GenereteQrCode::with('detail_qr_codes');

            if ($request->id_absen == '9999') {
            } elseif ($request->id_departemen == 'DP009') {
                $idDept = $mappingSubDeptToDept[$request->id_sub_departemen] ?? $request->id_departemen;
                $query->where('id_departemen', $idDept);
            } else {
                $query->where('id_departemen', $request->id_departemen);
            }

            if ($request->filled('status')) {
                $query->where('status', $request->status);
            }

            if ($request->filled('search')) {
                $search = $request->search;

                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', '%' . $search . '%')
                        ->orWhere('sort_description', 'like', '%' . $search . '%')
                        ->orWhere('departemen', 'like', '%' . $search . '%')
                        ->orWhere('sub_departemen', 'like', '%' . $search . '%')
                        ->orWhereHas('qr_code', function ($q2) use ($search) {
                            $q2->where('link_qr', 'like', '%' . $search . '%');
                        });
                });
            }

            $generete_qr_code = $query->paginate(25);

            if ($generete_qr_code->isEmpty()) {
                return response()->json([
                    'status'  => 'success',
                    'message' => 'Data Generete Qr Code Kosong',
                    'data'    => [],
                ], 200);
            }

            return response()->json([
                'status'  => 'success',
                'message' => 'Data QR Code Berhasil Ditemukan',
                'data'    => $generete_qr_code,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Terjadi kesalahan saat mengambil data: ' . $e->getMessage(),
                'data'    => [],
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:5',
            'sort_description' => 'required|min:5',
            'user_name' => 'required|min:3',
            'user_id' => 'required|min:4',
            'id_departemen' => 'required|min:4',
            'departemen' => 'required|min:2',
            'id_sub_departemen' => 'required|min:4',
            'sub_departemen' => 'required|min:4',
            'qr_codes' => 'required|array|min:1',
            'qr_codes.*.link_qr' => 'required|string|min:5',
            'qr_codes.*.note_qr' => 'required|string|min:5',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()->first(),
                'data'    => [],
            ], 422);
        }

        DB::beginTransaction();

        try {
            // Create Generere Qr Code
            $generete_qr_code = new GenereteQrCode();
            $generete_qr_code->title = $request->title;
            $generete_qr_code->sort_description = $request->sort_description;
            $generete_qr_code->id_departemen = $request->id_departemen;
            $generete_qr_code->departemen = $request->departemen;
            $generete_qr_code->id_sub_departemen = $request->id_sub_departemen;
            $generete_qr_code->sub_departemen = $request->sub_departemen;
            $generete_qr_code->status = 'draft'; //status: draft, 'waiting_spv', 'full_acc', 'rejected'
            $generete_qr_code->save();

            // Create Detail Qr Code
            $qrCodes = [];
            foreach ($request->qr_codes as $qr_code) {
                $qrCodeNew = new DetailQrCode();
                $qrCodeNew->generete_qrcode_id = $generete_qr_code->id;
                $qrCodeNew->link_qr = $qr_code['link_qr'];
                $qrCodeNew->note_qr = $qr_code['note_qr'];
                $qrCodeNew->status = 'draft'; //status: draft, 'waiting_spv', 'full_acc', 'rejected', 'archived'
                $qrCodeNew->save();
                $qrCodes[] = $qrCodeNew;
            }

            // Create Log  Generete Qr Code
            $generete_qr_code_log = new GenereteQrCodeLog();
            $generete_qr_code_log->generete_qrcode_id = $generete_qr_code->id;
            $generete_qr_code_log->user_name = $request->user_name;
            $generete_qr_code_log->user_id = $request->user_id;
            $generete_qr_code_log->note_log = $request->user_name . ' Create Generete Qr Code';
            $generete_qr_code_log->save();

            DB::commit();

            return response()->json([
                'status'  => 'success',
                'message' => 'Generete QR Code Berhasil Ditambahkan',
                'data'    => [
                    'generete_qr_code' => $generete_qr_code,
                    'qr_codes' => $qrCodes,
                    'generete_qr_code_log' => $generete_qr_code_log
                ],
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status'  => 'error',
                'message' => 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage(),
                'data'    => [],
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $generete_qr_code = GenereteQrCode::with(['detail_qr_codes', 'generete_qr_code_logs'])->find($id);

            if (!$generete_qr_code) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Data QR Code Tidak Ditemukan',
                    'data'    => [],
                ], 404);
            }

            return response()->json([
                'status'  => 'success',
                'message' => 'Data QR Code Berhasil Ditemukan',
                'data'    => $generete_qr_code,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Terjadi kesalahan saat mengambil data: ' . $e->getMessage(),
                'data'    => [],
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:5',
            'sort_description' => 'required|min:5',
            'user_name' => 'required|min:3',
            'user_id' => 'required|min:4',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()->first(),
                'data'    => [],
            ], 422);
        }

        DB::beginTransaction();

        try {
            $generete_qr_code = GenereteQrCode::find($id);

            if (!$generete_qr_code) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Data QR Code Tidak Ditemukan Berdasarkan ID',
                    'data'    => [],
                ], 404);
            }

            if ($generete_qr_code->status != 'draft') {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Data generete qr code tidak dapat diubah, karena statusnya bukan draft',
                    'data'    => [],
                ], 422);
            }

            $noteLogParts = [];
            $excludeFields = ['user_name', 'user_id'];

            foreach ($validator->validated() as $field => $newValue) {
                if (!in_array($field, $excludeFields) && $newValue !== $generete_qr_code->$field) {
                    $noteLogParts[] = "$field diubah dari " . $generete_qr_code->$field . " menjadi " . $newValue;
                    $generete_qr_code->$field = $newValue;
                }
            }

            if (empty($noteLogParts)) {
                $noteLogParts[] = 'Tidak ada perubahan pada data';
            }

            $generete_qr_code->save();

            // Create Log Update Generete Qr Code
            $generete_qr_code_log = new GenereteQrCodeLog();
            $generete_qr_code_log->generete_qrcode_id = $generete_qr_code->id;
            $generete_qr_code_log->user_name = $request->user_name;
            $generete_qr_code_log->user_id = $request->user_id;
            $generete_qr_code_log->note_log = implode(', ', $noteLogParts);
            $generete_qr_code_log->save();

            DB::commit();

            return response()->json([
                'status'  => 'success',
                'message' => 'Data QR Code Berhasil Diupdate',
                'data'    => [
                    'generete_qr_code' => $generete_qr_code,
                    'generete_qr_code_log' => $generete_qr_code_log
                ],
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status'  => 'error',
                'message' => 'Terjadi kesalahan saat update data: ' . $e->getMessage(),
                'data'    => [],
            ], 500);
        }
    }

    /**
     * Approval the specified resource from storage.
     */
    public function approval(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required|in:approve,reject,back_to_draft',
            'user_name' => 'required|min:3',
            'user_id' => 'required|min:4',
            'id_grade' => 'required|min:4',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()->first(),
                'data'    => [],
            ], 422);
        }

        // cek id grade dulu
        if (!in_array($request->id_grade, ['LV-002', 'LV-004'])) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Hanya bisa disetujui oleh SPV atau Manager',
                'data'    => [],
            ], 422);
        }

        DB::beginTransaction();

        try {
            $generete_qr_code = GenereteQrCode::find($id);

            if (!$generete_qr_code) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Data QR Code Tidak Ditemukan Berdasarkan ID',
                    'data'    => [],
                ], 404);
            }

            if (in_array($generete_qr_code->status, ['full_acc', 'rejected', 'draft'])) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Status saat ini bisa jadi draft, full acc atau rejected',
                    'data'    => [],
                ], 422);
            }


            $mapping = [
                'approve' => [
                    'draft' => 'waiting_approved',
                    'waiting_approved' => 'full_acc',
                ],
                'reject' => [
                    'draft' => 'rejected',
                    'waiting_approved' => 'rejected',
                ],
                'back_to_draft' => [
                    'waiting_approved' => 'draft',
                ],
            ];

            $currentStatus = $generete_qr_code->status;
            $newStatus = $mapping[$request->type][$currentStatus] ?? null;

            if (!$newStatus) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Status saat ini tidak dapat diproses untuk tipe ' . $request->type,
                    'data'    => [],
                ], 422);
            }

            $generete_qr_code->status = $newStatus;
            $generete_qr_code->save();

            //update semua qr code
            DetailQrCode::where('generete_qrcode_id', $generete_qr_code->id)
                ->update(['status' => $newStatus]);

            $generete_qr_code_log = new GenereteQrCodeLog();
            $generete_qr_code_log->generete_qrcode_id = $generete_qr_code->id;
            $generete_qr_code_log->user_name = $request->user_name;
            $generete_qr_code_log->user_id = $request->user_id;
            $generete_qr_code_log->note_log = 'Status generete qr Code di ' . $request->type . ' oleh ' . $request->user_name . ' dengan ID Grade ' . $request->id_grade . ' menjadi ' . $newStatus;
            $generete_qr_code_log->save();

            DB::commit();

            return response()->json([
                'status'  => 'success',
                'message' => 'Generete qr code berhasil di ' . $request->type,
                'data'    => [
                    'generete_qr_code' => $generete_qr_code,
                    'generete_qr_code_log' => $generete_qr_code_log
                ],
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status'  => 'error',
                'message' => 'Terjadi kesalahan saat approval: ' . $e->getMessage(),
                'data'    => [],
            ], 500);
        }
    }

    /**
     * Submit the specified resource from storage.
     */
    public function submit(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|min:3',
            'user_id' => 'required|min:4',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()->first(),
                'data'    => [],
            ], 422);
        }

        DB::beginTransaction();

        try {
            $generete_qr_code = GenereteQrCode::find($id);

            if (!$generete_qr_code) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Data QR Code Tidak Ditemukan Berdasarkan ID',
                    'data'    => [],
                ], 404);
            }

            if ($generete_qr_code->status != 'draft') {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Status QR Code bukan draft, tidak dapat diubah',
                    'data'    => [],
                ], 422);
            }

            $generete_qr_code->status = 'waiting_approved';
            $generete_qr_code->save();

            //update semua qr code
            DetailQrCode::where('generete_qrcode_id', $generete_qr_code->id)
                ->update(['status' => 'waiting_approved']);


            $generete_qr_code_log = new GenereteQrCodeLog();
            $generete_qr_code_log->generete_qrcode_id = $generete_qr_code->id;
            $generete_qr_code_log->user_name = $request->user_name;
            $generete_qr_code_log->user_id = $request->user_id;
            $generete_qr_code_log->note_log = 'Generete Qr Code di submit oleh ' . $request->user_name;
            $generete_qr_code_log->save();

            DB::commit();

            return response()->json([
                'status'  => 'success',
                'message' => 'Generete qr code berhasil di submit',
                'data'    => [
                    'generete_qr_code' => $generete_qr_code,
                    'generete_qr_code_log' => $generete_qr_code_log
                ],
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status'  => 'error',
                'message' => 'Terjadi kesalahan saat submit: ' . $e->getMessage(),
                'data'    => [],
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
