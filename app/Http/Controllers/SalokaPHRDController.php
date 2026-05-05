<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class SalokaPHRDController extends Controller
{
    private function safeUtf8($text)
    {
        if (is_array($text)) {
            return array_map([$this, 'safeUtf8'], $text);
        } elseif (is_object($text)) {
            foreach ($text as $key => $value) {
                $text->$key = $this->safeUtf8($value);
            }
            return $text;
        } elseif (is_string($text)) {
            return mb_convert_encoding($text, 'UTF-8', 'UTF-8');
        }
        return $text;
    }

    public function GeneratePdf(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'booking_code'      => 'required',
            'name'              => 'required',
            'company'            => 'required',
            'phone'             => 'required',
            'address'           => 'required',
            'registration_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
                'data' => [],
            ], 422);
        }

        try {
            $data = [
                'booking_code'      => $request->booking_code,
                'name'              => $request->name,
                'company'            => $request->company,
                'phone'             => $request->phone,
                'address'           => $request->address,
                'registration_date' => $request->registration_date,
            ];

            $data = $this->safeUtf8($data);

            $pdfTicket = Pdf::loadView('pdf.saloka-phrd', $data)
                ->setPaper('A4', 'portrait')
                ->setOptions([
                    'defaultFont'           => 'Open Sauce One',
                    'isHtml5ParserEnabled'  => true,
                    'isRemoteEnabled'       => true,
                ])
                ->setWarnings(false);

            $pdfTicket->getDomPDF()->getOptions()->setChroot(public_path());

            $fileName = $request->booking_code . '.pdf';
            $path = 'public/pdf/' . $fileName;

            Storage::put($path, $pdfTicket->output());

            return response()->json([
                'status' => 'success',
                'message' => 'File pdf berhasil dibuat.',
                'data' => [
                    'file_name' => $fileName,
                    'file_path' => asset('storage/pdf/' . $fileName),
                ],
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan generate pdf: ' . $th->getMessage(),
                'data' => [],
            ], 500);
        }
    }



     public function GenerateSertificate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
                'data' => [],
            ], 422);
        }

        try {
            $data = [
                'name'              => $request->name 
            ];

            $data = $this->safeUtf8($data);

            $pdfTicket = Pdf::loadView('pdf.sertificate-phrd', $data)
                ->setPaper('A4', 'landscape')
                ->setOptions([
                    'defaultFont'           => 'Open Sauce One',
                    'isHtml5ParserEnabled'  => true,
                    'isRemoteEnabled'       => true,
                ])
                ->setWarnings(false);

            $pdfTicket->getDomPDF()->getOptions()->setChroot(public_path());

            return $pdfTicket->stream();

            $fileName = $request->name . '.pdf';
            $path = 'public/pdf/' . $fileName;

            Storage::put($path, $pdfTicket->output());

            return response()->json([
                'status' => 'success',
                'message' => 'File pdf berhasil dibuat.',
                'data' => [
                    'file_name' => $fileName,
                    'file_path' => asset('storage/pdf/' . $fileName),
                ],
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan generate pdf: ' . $th->getMessage(),
                'data' => [],
            ], 500);
        }
    }
}


 