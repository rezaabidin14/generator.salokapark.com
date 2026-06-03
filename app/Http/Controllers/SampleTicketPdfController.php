<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SampleTicketPdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pdfTicket = PDF::loadView('pdf.sample-ticket-pdf')
            ->setPaper('A4', 'portrait')
            ->setOptions([
                'fontDir' => public_path('/assets/fonts/open-sauce-one/ttf'),
                'fontCache' => public_path('/assets/fonts/open-sauce-one/ttf'),
                'defaultFont' => 'DejaVu Sans',
                'isHtml5ParserEnabled' => true,
                'isRemoteEnabled' => true,
                'isPhpEnabled' => true,
            ])
            ->setWarnings(false);
        $pdfTicket->getDomPDF()->getOptions()->setChroot(public_path());
        return $pdfTicket->stream('Sample Reservasi Tiket Saloka Theme Park.pdf');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
