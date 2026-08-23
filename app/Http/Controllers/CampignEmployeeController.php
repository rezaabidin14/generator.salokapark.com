<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class CampignEmployeeController extends Controller
{
    /**
     * Menjaga seluruh data yang dikirim ke DomPDF
     * tetap menggunakan UTF-8.
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
     * Generate E-Ticket Employee Campaign
     *
     * Input:
     * - booking_code
     * - arrival_date
     * - quantity
     * - unit_price
     * - total_amount
     * - customer_name
     * - customer_phone
     */
    public function GeneratePdf(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'booking_code'   => 'required',
            'arrival_date'   => 'required|date',
            'quantity'       => 'required|integer|min:1',
            'unit_price'     => 'required|numeric|min:0',
            'total_amount'   => 'required|numeric|min:0',
            'customer_name'  => 'required',
            'customer_phone' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
                'data' => [],
            ], 422);
        }

        try {

            /*
            |--------------------------------------------------------------------------
            | Format tanggal
            |--------------------------------------------------------------------------
            */

            $arrivalDate = Carbon::parse(
                $request->arrival_date
            )->format('d-m-Y');


            /*
            |--------------------------------------------------------------------------
            | Data untuk Blade PDF
            |--------------------------------------------------------------------------
            |
            | Field dibuat mengikuti kebutuhan Blade E-Ticket.
            |
            */

            $data = [
                'order_id' => $request->booking_code,

                'booking_code' => $request->booking_code,

                'date_plan' => $arrivalDate,

                'total_ticket' => (int) $request->quantity,

                'unit_price' => (float) $request->unit_price,

                'amount_total' => (float) $request->total_amount,

                'customer_name' => $request->customer_name,

                'customer_phone' => $request->customer_phone,

                'payment_method' => 'Employee Campaign',

                'payment_date' => Carbon::now()->format(
                    'd-m-Y H:i'
                ),

                /*
                |--------------------------------------------------------------------------
                | Dibuat untuk kompatibilitas jika masih ada
                | bagian Blade lama yang menggunakan ticket_orders.
                |--------------------------------------------------------------------------
                */

                'ticket_orders' => [
                    [
                        'ticket_name' => 'Tiket Campaign Karyawan',

                        'quantity' => (int) $request->quantity,

                        'price' => (float) $request->unit_price,

                        'subtotal' => (float) $request->total_amount,
                    ],
                ],
            ];


            /*
            |--------------------------------------------------------------------------
            | Pastikan UTF-8
            |--------------------------------------------------------------------------
            */

            $data = $this->safeUtf8($data);


            /*
            |--------------------------------------------------------------------------
            | Generate PDF
            |--------------------------------------------------------------------------
            */

            $pdfTicket = Pdf::loadView(
                'pdf.invoice-website-saloka',
                $data
            )
                ->setPaper('A4', 'portrait')
                ->setOptions([
                    'defaultFont' => 'Open Sauce One',
                    'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,
                ])
                ->setWarnings(false);


            /*
            |--------------------------------------------------------------------------
            | DomPDF Chroot
            |--------------------------------------------------------------------------
            */

            $pdfTicket
                ->getDomPDF()
                ->getOptions()
                ->setChroot(public_path());


            /*
            |--------------------------------------------------------------------------
            | Nama File
            |--------------------------------------------------------------------------
            */

            $fileName = 'Reservation-'
                . $request->booking_code
                . '.pdf';


            /*
            |--------------------------------------------------------------------------
            | Storage
            |--------------------------------------------------------------------------
            */

            $path = 'public/invoices/' . $fileName;

            Storage::put(
                $path,
                $pdfTicket->output()
            );


            /*
            |--------------------------------------------------------------------------
            | Response
            |--------------------------------------------------------------------------
            */

            return response()->json([
                'status' => 'success',
                'message' => 'E-ticket Employee Campaign berhasil dibuat.',
                'data' => [
                    'file_name' => $fileName,
                    'file_path' => Storage::url($path),
                    'booking_code' => $request->booking_code,
                ],
            ]);

        } catch (\Throwable $th) {

            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan generate pdf: '
                    . $th->getMessage(),
                'data' => [],
            ], 500);
        }
    }


    /**
     * Generate Invoice Website Saloka
     *
     * Function lama tetap dipertahankan.
     */
    public function GenerateInvoiceWebsite(Request $request)
    {
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

            $pdfTicket = Pdf::loadView(
                'pdf.invoice-website-saloka',
                $data
            )
                ->setPaper('A4', 'portrait')
                ->setOptions([
                    'defaultFont' => 'Open Sauce One',
                    'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,
                ])
                ->setWarnings(false);

            $pdfTicket
                ->getDomPDF()
                ->getOptions()
                ->setChroot(public_path());

            $fileName = 'Invoice-' . $request->order_id . '.pdf';

            $path = 'public/invoices/' . $fileName;

            Storage::put(
                $path,
                $pdfTicket->output()
            );

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
                'message' => 'Terjadi kesalahan generate pdf: '
                    . $th->getMessage(),
                'data' => [],
            ], 500);
        }
    }


    /**
     * Generate Invoice Livin Sukha
     */
    public function GenerateInvoiceLivinSukha(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id'       => 'required',
            'total_ticket'   => 'required',
            'amount_total'   => 'required',
            'payment_method' => 'required',
            'payment_date'   => 'required',
            'date_plan'      => 'required',
            'booking_code'   => 'required',
            'customer_name'  => 'required',
            'customer_email' => 'required',
            'ticket_orders'  => 'required',
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
                'order_id' => $request->order_id,
                'total_ticket' => $request->total_ticket,
                'amount_total' => $request->amount_total,
                'payment_method' => $request->payment_method,
                'payment_date' => $request->payment_date,
                'date_plan' => $request->date_plan,
                'booking_code' => $request->booking_code,
                'customer_name' => $request->customer_name,
                'customer_email' => $request->customer_email,
                'ticket_orders' => $request->ticket_orders,
            ];

            $data = $this->safeUtf8($data);

            $pdfTicket = Pdf::loadView(
                'pdf.invoice-livin-sukha',
                $data
            )
                ->setPaper('A4', 'portrait')
                ->setOptions([
                    'defaultFont' => 'Open Sauce One',
                    'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,
                ])
                ->setWarnings(false);

            $pdfTicket
                ->getDomPDF()
                ->getOptions()
                ->setChroot(public_path());

            $fileName = 'Invoice-' . $request->order_id . '.pdf';

            $path = 'public/invoices/' . $fileName;

            Storage::put(
                $path,
                $pdfTicket->output()
            );

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
                'message' => 'Terjadi kesalahan generate pdf: '
                    . $th->getMessage(),
                'data' => [],
            ], 500);
        }
    }


    /**
     * Generate Invoice Balon Udara Saloka
     */
    public function GenerateInvoiceBalonUdaraSaloka(Request $request)
    {
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
                'order_id' => $request->order_id,
                'total_ticket' => $request->total_ticket,
                'amount_total' => $request->amount_total,
                'payment_method' => $request->payment_method,
                'payment_date' => $request->payment_date,
                'date_plan' => $request->date_plan,
                'booking_code' => $request->booking_code,
                'customer_name' => $request->customer_name,
                'customer_email' => $request->customer_email,
                'customer_phone' => $request->customer_phone,
                'customer_address' => $request->customer_address,
                'customer_province' => $request->customer_province,
                'customer_city' => $request->customer_city,
                'ticket_orders' => $request->ticket_orders,
            ];

            $data = $this->safeUtf8($data);

            $pdfTicket = Pdf::loadView(
                'pdf.invoice-balon-udara-saloka',
                $data
            )
                ->setPaper('A4', 'portrait')
                ->setOptions([
                    'defaultFont' => 'Open Sauce One',
                    'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,
                ])
                ->setWarnings(false);

            $pdfTicket
                ->getDomPDF()
                ->getOptions()
                ->setChroot(public_path());

            $fileName = 'Invoice-' . $request->order_id . '.pdf';

            $path = 'public/invoices/' . $fileName;

            Storage::put(
                $path,
                $pdfTicket->output()
            );

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
                'message' => 'Terjadi kesalahan generate pdf: '
                    . $th->getMessage(),
                'data' => [],
            ], 500);
        }
    }


    /**
     * Generate Invoice Lomba Mewarnai Saloka
     */
    public function GenerateInvoiceLombaMewarnaiSaloka(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id'          => 'required',
            'total_ticket'      => 'required',
            'amount_total'      => 'required',
            'payment_method'    => 'required',
            'payment_date'      => 'required',
            'date_plan'         => 'required',
            'booking_code'      => 'required',
            'customer_name'     => 'required',
            'companion_name'    => 'required',
            'school'            => 'required',
            'class'             => 'required',
            'customer_email'    => 'required',
            'customer_phone'    => 'required',
            'customer_province' => 'required',
            'customer_city'     => 'required',
            'participants'      => 'nullable',
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
                'order_id' => $request->order_id,
                'total_ticket' => $request->total_ticket,
                'amount_total' => $request->amount_total,
                'payment_method' => $request->payment_method,
                'payment_date' => $request->payment_date,
                'date_plan' => $request->date_plan,
                'booking_code' => $request->booking_code,
                'customer_name' => $request->customer_name,
                'companion_name' => $request->companion_name,
                'school' => $request->school,
                'class' => $request->class,
                'customer_email' => $request->customer_email,
                'customer_phone' => $request->customer_phone,
                'customer_address' => $request->customer_address,
                'customer_province' => $request->customer_province,
                'customer_city' => $request->customer_city,
                'ticket_orders' => $request->ticket_orders,
                'participants' => $request->participants,
            ];

            $data = $this->safeUtf8($data);

            $pdfTicket = Pdf::loadView(
                'pdf.invoice-lomba-mewarnai',
                $data
            )
                ->setPaper('A4', 'portrait')
                ->setOptions([
                    'defaultFont' => 'Open Sauce One',
                    'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,
                ])
                ->setWarnings(false);

            $pdfTicket
                ->getDomPDF()
                ->getOptions()
                ->setChroot(public_path());

            $fileName = 'Invoice-' . $request->order_id . '.pdf';

            $path = 'public/invoices/' . $fileName;

            Storage::put(
                $path,
                $pdfTicket->output()
            );

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
                'message' => 'Terjadi kesalahan generate pdf: '
                    . $th->getMessage(),
                'data' => [],
            ], 500);
        }
    }


    /**
     * Generate Invoice Lomba Tari Saloka
     */
    public function GenerateInvoiceLombaTariSaloka(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id'          => 'required',
            'total_ticket'      => 'required',
            'amount_total'      => 'required',
            'payment_method'    => 'required',
            'payment_date'      => 'required',
            'date_plan'         => 'required',
            'booking_code'      => 'required',
            'customer_name'     => 'required',
            'companion_name'    => 'required',
            'school'            => 'required',
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
                'order_id' => $request->order_id,
                'total_ticket' => $request->total_ticket,
                'amount_total' => $request->amount_total,
                'payment_method' => $request->payment_method,
                'payment_date' => $request->payment_date,
                'date_plan' => $request->date_plan,
                'booking_code' => $request->booking_code,
                'customer_name' => $request->customer_name,
                'companion_name' => $request->companion_name,
                'school' => $request->school,
                'customer_email' => $request->customer_email,
                'customer_phone' => $request->customer_phone,
                'customer_address' => $request->customer_address,
                'customer_province' => $request->customer_province,
                'customer_city' => $request->customer_city,
                'ticket_orders' => $request->ticket_orders,
            ];

            $data = $this->safeUtf8($data);

            $pdfTicket = Pdf::loadView(
                'pdf.invoice-lomba-tari',
                $data
            )
                ->setPaper('A4', 'portrait')
                ->setOptions([
                    'defaultFont' => 'Open Sauce One',
                    'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,
                ])
                ->setWarnings(false);

            $pdfTicket
                ->getDomPDF()
                ->getOptions()
                ->setChroot(public_path());

            $fileName = 'Invoice-' . $request->order_id . '.pdf';

            $path = 'public/invoices/' . $fileName;

            Storage::put(
                $path,
                $pdfTicket->output()
            );

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
                'message' => 'Terjadi kesalahan generate pdf: '
                    . $th->getMessage(),
                'data' => [],
            ], 500);
        }
    }
}