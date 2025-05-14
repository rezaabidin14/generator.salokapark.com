<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class GeneratePDFController extends Controller
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

    public function GenerateInvoiceWebsiteSaloka(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id'          => 'required',
            'total_ticket'      => 'required',
            'amount_total'      => 'required',
            "payment_method"    => 'required',
            'payment_date'      => 'required',
            'date_plan'         => 'required',
            'booking_code'      => 'required',
            'customer_name'     => 'required',
            'customer_email'    => 'required',
            'customer_phone'    => 'required',
            'customer_province' => 'required',
            'customer_city'     => 'required',
            'ticket_orders'     => 'required',
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
                'customer_address'  => $request->customer_address,
                'customer_province' => $request->customer_province,
                'customer_city'     => $request->customer_city,
                'ticket_orders'     => $request->ticket_orders,
            ];

            $data = $this->safeUtf8($data);

            $pdfTicket = Pdf::loadView('pdf.invoice-website-saloka', $data)
                ->setPaper('A4', 'portrait')
                ->setOptions([
                    'defaultFont'           => 'Open Sauce One',
                    'isHtml5ParserEnabled'  => true,
                    'isRemoteEnabled'       => true,
                ])
                ->setWarnings(false);

            $pdfTicket->getDomPDF()->getOptions()->setChroot(public_path());

            $fileName = 'Invoice-' . $request->order_id . '.pdf';
            $path = 'public/invoices/' . $fileName;

            Storage::put($path, $pdfTicket->output());

            return response()->json([
                'status' => 'success',
                'message' => 'Invoice berhasil dibuat.',
                'data' => [
                    'file_name' => $fileName,
                    'file_path' => Storage::url($path),
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


    public function GenerateInvoiceLivinSukha(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id'          => 'required',
            'total_ticket'      => 'required',
            'amount_total'      => 'required',
            "payment_method"    => 'required',
            'payment_date'      => 'required',
            'date_plan'         => 'required',
            'booking_code'      => 'required',
            'customer_name'     => 'required',
            'customer_email'    => 'required',
            'ticket_orders'     => 'required',
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
                'order_id'          => $request->order_id,
                'total_ticket'      => $request->total_ticket,
                'amount_total'      => $request->amount_total,
                'payment_method'    => $request->payment_method,
                'payment_date'      => $request->payment_date,
                'date_plan'         => $request->date_plan,
                'booking_code'      => $request->booking_code,
                'customer_name'     => $request->customer_name,
                'customer_email'    => $request->customer_email,
                'ticket_orders'     => $request->ticket_orders,
            ];

            $data = $this->safeUtf8($data);

            $pdfTicket = Pdf::loadView('pdf.invoice-livin-sukha', $data)
                ->setPaper('A4', 'portrait')
                ->setOptions([
                    'defaultFont'           => 'Open Sauce One',
                    'isHtml5ParserEnabled'  => true,
                    'isRemoteEnabled'       => true,
                ])
                ->setWarnings(false);

            $pdfTicket->getDomPDF()->getOptions()->setChroot(public_path());

            $fileName = 'Invoice-' . $request->order_id . '.pdf';
            $path = 'public/invoices/' . $fileName;

            Storage::put($path, $pdfTicket->output());

            return response()->json([
                'status' => 'success',
                'message' => 'Invoice berhasil dibuat.',
                'data' => [
                    'file_name' => $fileName,
                    'file_path' => Storage::url($path),
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
