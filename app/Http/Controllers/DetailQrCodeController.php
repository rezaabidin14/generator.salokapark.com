<?php

namespace App\Http\Controllers;

use App\Models\DetailQrCode;
use App\Models\GenereteQrCode;
use App\Models\GenereteQrCodeLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class DetailQrCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'link_qr' => 'required|min:5',
            'note_qr' => 'required|min:5',
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
                    'message' => 'Data qr code tidak ditemukan berdasarkan ID',
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

            $qr_code = new DetailQrCode();
            $qr_code->generete_qrcode_id = $generete_qr_code->id;
            $qr_code->link_qr = $request->link_qr;
            $qr_code->note_qr = $request->note_qr;
            $qr_code->status = 'draft';
            $qr_code->save();

            //Create Generete Qr Code Log
            $generete_qr_code_log = new GenereteQrCodeLog();
            $generete_qr_code_log->generete_qrcode_id = $generete_qr_code->id;
            $generete_qr_code_log->user_name = $request->user_name;
            $generete_qr_code_log->user_id = $request->user_id;
            $generete_qr_code_log->note_log = $request->user_name . ' menambahkan detail qr code';
            $generete_qr_code_log->save();

            DB::commit();

            return response()->json([
                'status'  => 'success',
                'message' => 'Detail qr code berhasil ditambahkan',
                'data'    => [
                    'qr_codes' =>  $qr_code,
                    'generete_qr_code_log' => $generete_qr_code_log
                ],
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status'  => 'error',
                'message' => 'Terjadi kesalahan saat mebambahkan detail qr code: ' . $e->getMessage(),
                'data'    => [],
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailQrCode $detailQrCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailQrCode $detailQrCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'generete_qrcode_id' => 'required|min:1',
            'link_qr' => 'required|min:5',
            'note_qr' => 'required|min:5',
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
            $generete_qr_code = GenereteQrCode::find($request->generete_qrcode_id);

            if (!$generete_qr_code) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Data qr code tidak ditemukan berdasarkan ID',
                    'data'    => [],
                ], 404);
            }

            //cek status generete qr code
            if ($generete_qr_code->status != 'draft') {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Status generete qr code bukan draft, tidak dapat diubah',
                    'data'    => [],
                ], 422);
            }

            $detail_qr_code = DetailQrCode::find($id);
            if (!$detail_qr_code) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Detail qr code tidak ditemukan',
                    'data'    => [],
                ], 404);
            }

            //cek status detail qr code
            if ($detail_qr_code->status != 'draft') {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Status detail qr code bukan draft, tidak dapat diubah',
                    'data'    => [],
                ], 422);
            }

            $noteLogParts = [];
            $excludeFields = ['user_name', 'user_id', 'generete_qrcode_id'];

            foreach ($validator->validated() as $field => $newValue) {
                if (!in_array($field, $excludeFields) && $newValue !== $detail_qr_code->$field) {
                    $noteLogParts[] = "Update detail qr code: $field diubah dari " . $detail_qr_code->$field . " menjadi " . $newValue;
                    $detail_qr_code->$field = $newValue;
                }
            }

            if (empty($noteLogParts)) {
                $noteLogParts[] = 'Tidak ada perubahan pada data';
            }

            $detail_qr_code->save();

            // Create Log Update Generete Qr Code
            $generete_qr_code_log = new GenereteQrCodeLog();
            $generete_qr_code_log->generete_qrcode_id = $request->generete_qrcode_id;
            $generete_qr_code_log->user_name = $request->user_name;
            $generete_qr_code_log->user_id = $request->user_id;
            $generete_qr_code_log->note_log = implode(', ', $noteLogParts);
            $generete_qr_code_log->save();

            DB::commit();

            return response()->json([
                'status'  => 'success',
                'message' => 'Detail qr code berhasil diubah',
                'data'    => [
                    'qr_code' => $detail_qr_code,
                    'generete_qr_code_log' => $generete_qr_code_log
                ],
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status'  => 'error',
                'message' => 'Terjadi kesalahan saat update detail qr code: ' . $e->getMessage(),
                'data'    => [],
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailQrCode $detailQrCode)
    {
        //
    }
}