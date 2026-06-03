<?php

use App\Http\Controllers\DetailQrCodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneratePDFController;
use App\Http\Controllers\GenereteQrCodeController;
use App\Http\Controllers\GenerateExcelController;
use App\Http\Controllers\GenerateImageFromSheet;
use App\Http\Controllers\SampleTicketPdfController;
use App\Http\Controllers\GenerateEmailInformationPdfController;
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
Route::post('/generate-invoice-balon-udara-saloka-pdf', [GeneratePDFController::class, 'GenerateInvoiceBalonUdaraSaloka']);
Route::post('/generate-invoice-lomba-mewarnai-saloka-pdf', [GeneratePDFController::class, 'GenerateInvoiceLombaMewarnaiSaloka']);
Route::post('/generate-invoice-lomba-tari-saloka-pdf', [GeneratePDFController::class, 'GenerateInvoiceLombaTariSaloka']);

Route::get('/sample-ticket-pdf', [SampleTicketPdfController::class, 'index']);

// Generete QR Code
Route::post('/generete-qrcode-create', [GenereteQrCodeController::class, 'store'])->name('generete-qrcode-create');
Route::get('/generete-qrcode', [GenereteQrCodeController::class, 'index'])->name('generete-qrcode');
Route::get('/generete-qrcode-detail/{id}', [GenereteQrCodeController::class, 'show'])->name('generete-qrcode-detail');
Route::post('/generete-qrcode-update/{id}', [GenereteQrCodeController::class, 'update'])->name('generete-qrcode-update');
Route::post('/generete-qrcode-approval/{id}', [GenereteQrCodeController::class, 'approval'])->name('generete-qrcode-approval');
Route::post('/generete-qrcode-submit/{id}', [GenereteQrCodeController::class, 'submit'])->name('generete-qrcode-submit');

// Detail Qr Code
Route::post('/qrcode-create/{id}', [DetailQrCodeController::class, 'store'])->name('detail-qrcode-create');
Route::post('/qrcode-update/{id}', [DetailQrCodeController::class, 'update'])->name('detail-qrcode-update');

// Generete Excel
Route::post('/generete-excel-jathilan', [GenerateExcelController::class, 'exportExcelEventJathilan'])->name('generete-excel');
Route::post('/generete-excel-mewarnai', [GenerateExcelController::class, 'exportExcelEventMewarnai'])->name('generete-excel-mewarnai');
Route::post('/generete-excel-membership-hallowen', [GenerateExcelController::class, 'exportExcelEventMembershipHallowen'])->name('generete-excel-membership');
Route::post('/generete-excel-tari-kreasi-supporter', [GenerateExcelController::class, 'exportExcelTariKreasiSupporter'])->name('generete-excel-tari-kreasi-supporter');
Route::post('/generete-excel-tari-kreasi', [GenerateExcelController::class, 'exportExcelTariKreasi'])->name('generete-excel-tari-kreasi');

// Generate PDF Email
Route::post('/generate-email-information', [GenerateEmailInformationPdfController::class, 'GenerateEmailInformation']);

// Generate Image From Sheet
Route::get('/generate-image-from-sheet', [GenerateImageFromSheet::class, 'sheetToImage']);