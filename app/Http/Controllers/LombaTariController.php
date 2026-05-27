<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class LombaTariController extends Controller
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
        ini_set('memory_limit', '2048M');

        $validator = Validator::make($request->all(), [
            'order_id'          => 'required',
            'total_ticket'      => 'required',
            'amount_total'      => 'required',
            'payment_method'    => 'required',
            'payment_date'      => 'required',
            'date_plan'         => 'required',
            'booking_code'      => 'required',
            'customer_name'     => 'required',
            'customer_email'    => 'required',
            'customer_phone'    => 'required',
            'customer_province' => 'required',
            'customer_city'     => 'required',
            'group_name'        => 'required',
            'school_name'       => 'required',
            'ticket_orders'     => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()->first(),
                'data'    => [],
            ], 422);
        }

        try {

            Log::info('Start Generate PDF', [
                'booking_code' => $request->booking_code,
                'memory_mb'    => round(memory_get_usage(true) / 1024 / 1024, 2),
            ]);

            $data = [
                'order_id'          => $request->order_id,
                'total_ticket'      => $request->total_ticket,
                'amount_total'      => $request->amount_total,
                'payment_method'    => $request->payment_method,
                'payment_date'      => $request->payment_date,
                'date_plan'         => $request->date_plan,
                'booking_code'      => $request->booking_code,
                'customer_name'     => $request->customer_name,
                'customer_email'    => $request->customer_email,
                'customer_phone'    => $request->customer_phone,
                'customer_province' => $request->customer_province,
                'customer_city'     => $request->customer_city,
                'group_name'        => $request->group_name,
                'school_name'       => $request->school_name,
                'ticket_orders'     => $request->ticket_orders,
            ];

            $data = $this->safeUtf8($data);

            Log::info('Render PDF View', [
                'booking_code' => $request->booking_code,
            ]);

            $pdfTicket = Pdf::loadView('pdf.saloka-lomba-tari', $data)
                ->setPaper('A4', 'portrait')
                ->setOptions([
                    'defaultFont'          => 'sans-serif',
                    'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled'      => false,
                    'dpi'                  => 96,
                    'isPhpEnabled'         => true,
                ])
                ->setWarnings(false);

            $pdfTicket->getDomPDF()->getOptions()->setChroot(public_path());

            Log::info('PDF Render Success', [
                'booking_code' => $request->booking_code,
                'memory_peak_mb' => round(memory_get_peak_usage(true) / 1024 / 1024, 2),
            ]);

            $fileName = $request->booking_code . '.pdf';
            $path = 'public/pdf/' . $fileName;

            Storage::put($path, $pdfTicket->output());

            Log::info('PDF Saved Success', [
                'booking_code' => $request->booking_code,
                'path' => $path,
                'memory_peak_mb' => round(memory_get_peak_usage(true) / 1024 / 1024, 2),
            ]);

            return response()->json([
                'status'  => 'success',
                'message' => 'File pdf berhasil dibuat.',
                'data'    => [
                    'file_name' => $fileName,
                    'file_path' => asset('storage/pdf/' . $fileName),
                ],
            ]);
        } catch (\Throwable $th) {

            Log::error('Generate PDF Error', [
                'message' => $th->getMessage(),
                'file' => $th->getFile(),
                'line' => $th->getLine(),
                'trace' => $th->getTraceAsString(),

                'memory_usage_mb' => round(memory_get_usage(true) / 1024 / 1024, 2),
                'memory_peak_mb' => round(memory_get_peak_usage(true) / 1024 / 1024, 2),

                'payload' => $request->all(),
            ]);

            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan generate pdf: ' . $th->getMessage(),
                'data' => [],
            ], 500);
        }
    }

    public function GenerateSertificate(Request $request)
    {
        ini_set('memory_limit', '2048M');

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

            Log::info('Start Generate Certificate', [
                'name' => $request->name,
            ]);

            $data = [
                'name' => $request->name,
            ];

            $data = $this->safeUtf8($data);

            $pdfTicket = Pdf::loadView('pdf.sertificate-lomba-tari', $data)
                ->setPaper('A4', 'landscape')
                ->setOptions([
                    'defaultFont'          => 'sans-serif',
                    'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled'      => false,
                    'dpi'                  => 96,
                    'isPhpEnabled'         => true,
                ])
                ->setWarnings(false);

            $pdfTicket->getDomPDF()->getOptions()->setChroot(public_path());

            $fileName = $request->name . '.pdf';
            $path = 'public/pdf/' . $fileName;

            Storage::put($path, $pdfTicket->output());

            Log::info('Certificate Saved Success', [
                'name' => $request->name,
                'path' => $path,
                'memory_peak_mb' => round(memory_get_peak_usage(true) / 1024 / 1024, 2),
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'File pdf berhasil dibuat.',
                'data' => [
                    'file_name' => $fileName,
                    'file_path' => asset('storage/pdf/' . $fileName),
                ],
            ]);
        } catch (\Throwable $th) {

            Log::error('Generate Certificate Error', [
                'message' => $th->getMessage(),
                'file' => $th->getFile(),
                'line' => $th->getLine(),
                'trace' => $th->getTraceAsString(),

                'memory_usage_mb' => round(memory_get_usage(true) / 1024 / 1024, 2),
                'memory_peak_mb' => round(memory_get_peak_usage(true) / 1024 / 1024, 2),

                'payload' => $request->all(),
            ]);

            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan generate pdf: ' . $th->getMessage(),
                'data' => [],
            ], 500);
        }
    }
}