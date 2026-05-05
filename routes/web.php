<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalokafestController;
use App\Http\Controllers\SalokaPHRDController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/salokafest', [SalokafestController::class, 'previewPdf'])->name('salokafest');
Route::get('/phrd_sertificate', [SalokaPHRDController::class, 'GenerateSertificate'])->name('phrd_certificate');