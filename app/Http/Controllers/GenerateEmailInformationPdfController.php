<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class GenerateEmailInformationPdfController extends Controller
{
    public function GenerateEmailInformation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama'     => 'required|string',
            'email'    => 'required|email',
            'password' => 'required|string',
            'url'      => 'required|url',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()->first(),
                'data'    => [],
            ], 422);
        }

        try {
            $data = [
                'nama'     => $request->nama,
                'email'    => $request->email,
                'password' => $request->password,
                'url'      => $request->url,
            ];

            if (method_exists($this, 'safeUtf8')) {
                $data = $this->safeUtf8($data);
            }

            $pdf = Pdf::loadView('pdf.email-account-information', $data)
                ->setPaper('A4', 'portrait')
                ->setOptions([
                    'defaultFont'          => 'Poppins',
                    'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled'      => true,
                ])
                ->setWarnings(false);

            $pdf->getDomPDF()->getOptions()->setChroot(public_path());

            $fileName = $request->email .'.pdf';
            $path = 'public/informasi-akun/' . $fileName;

            Storage::put($path, $pdf->output());

            return response()->json([
                'status'  => 'success',
                'message' => 'PDF informasi akun berhasil dibuat.',
                'data'    => [
                    'file_name' => $fileName,
                    'file_path' => Storage::url($path),
                ],
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Terjadi kesalahan saat generate PDF: ' . $th->getMessage(),
                'data'    => [],
            ], 500);
        }
    }

}
