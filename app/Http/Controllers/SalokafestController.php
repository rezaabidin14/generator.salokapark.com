<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class SalokafestController extends Controller
{
    /**
     * Ensure UTF-8 safe
     */
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

    /**
     * Single source of truth (mapping data)
     */
    private function mapData(Request $request)
    {
        return $this->safeUtf8([
            'order_id'          => $request->order_id ?? 'INV-' . uniqid(),
            'booking_code'      => $request->booking_code ?? 'TEST-123',

            'customer_name'     => $request->name ?? 'John Doe',
            'customer_email'    => $request->email ?? 'email@example.com',
            'customer_phone'    => $request->phone ?? '08123456789',
            'customer_province' => $request->address ?? 'Indonesia',
            'customer_city'     => $request->address ?? 'Jakarta',

            'registration_date' => $request->registration_date ?? now(),
            'date_plan'         => $request->date_plan ?? now(),

            'total_ticket'      => $request->total_ticket ?? 1,
            'amount_total'      => $request->amount_total ?? 100000,

            'payment_method'    => $request->payment_method ?? 'BCA Virtual Account',
            'payment_date'      => $request->payment_date ?? now(),

            'ticket_orders'     => $request->ticket_orders ?? [
                [
                    'ticket_name' => 'Single Day',
                    'price'       => 100000,
                    'quantity'    => 1,
                    'subtotal'    => 100000,
                ]
            ],
        ]);
    }

    /**
     * Build PDF (dipakai preview & generate)
     */
    private function buildPdf(array $data)
    {
        $pdf = Pdf::loadView('pdf.salokafest', $data)
            ->setPaper('A4', 'portrait')
            ->setOptions([
                'defaultFont'           => 'sans-serif', // 🔥 jangan pakai custom font
                'isHtml5ParserEnabled'  => true,
                'isRemoteEnabled'       => true,
                'dpi'                   => 96,
            ])
            ->setWarnings(false);

        $pdf->getDomPDF()->getOptions()->setChroot(public_path());

        return $pdf;
    }

    /**
     * Generate & save PDF
     */
    public function GeneratePdf(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'booking_code'      => 'required',
            'name'              => 'required',
            'phone'             => 'required',
            'address'           => 'required',
            'registration_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()->first(),
                'data'    => [],
            ], 422);
        }

        try {
            $data = $this->mapData($request);

            $pdf = $this->buildPdf($data);

            $fileName = $data['booking_code'] . '.pdf';
            $path = 'public/pdf/' . $fileName;

            Storage::put($path, $pdf->output());

            return response()->json([
                'status'  => 'success',
                'message' => 'PDF berhasil dibuat',
                'data'    => [
                    'file_name' => $fileName,
                    'file_path' => asset('storage/pdf/' . $fileName),
                ],
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Gagal generate PDF: ' . $th->getMessage(),
                'data'    => [],
            ], 500);
        }
    }

    /**
     * Preview = ACUAN UTAMA (WAJIB)
     */
    public function previewPdf(Request $request)
    {
        $data = $this->mapData($request);

        $pdf = $this->buildPdf($data);

        return $pdf->stream('preview-ticket.pdf'); // 🔥 ini acuan utama
    }
}