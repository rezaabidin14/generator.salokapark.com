<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneratePDFController;
use App\Http\Controllers\SampleTicketPdfController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/generate-invoice-website-saloka-pdf', [GeneratePDFController::class, 'GenerateInvoiceWebsiteSaloka']);
Route::post('/generate-invoice-livin-sukha-pdf', [GeneratePDFController::class, 'GenerateInvoiceLivinSukha']);

Route::get('/sample-ticket-pdf', [SampleTicketPdfController::class, 'index']);