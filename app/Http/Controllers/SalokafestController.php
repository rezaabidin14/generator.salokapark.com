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
            'order_id'          => $request->order_id,
            'booking_code'      => $request->booking_code,

            'customer_name'     => $request->customer_name,
            'customer_email'    => $request->customer_email,
            'customer_phone'    => $request->customer_phone,
            'customer_province' => $request->customer_province,
            'customer_city'     => $request->customer_city,

            'transaction_date'  => $request->transaction_date,
            
            'amount_total'      => $request->amount_total,

            'payment_method'    => $request->payment_method,
            'payment_date'      => $request->payment_date,

            'ticket_orders'     => $request->ticket_orders 
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