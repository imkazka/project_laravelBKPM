<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;



Route::get('/session/create', [SessionController::class, 'create']);
Route::get('/session/show', [SessionController::class, 'show']);
Route::get('/session/delate', [SessionController::class, 'delate']);
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
Route::get('/cobaerror', [CobaController::class,'index']);
Route::get('/cobaerror/{nama}', [CobaController::class,'index']);
Route::get('/upload', [UploadController::class,'upload'])->name('upload');;
Route::post('/upload/proses', [UploadController::class,'proses_upload'])->name('upload.proses');;
Route::get('/dropzone', [UploadController::class, 'dropzone'])->name('dropzone');
Route::post('/dropzone/store', [UploadController::class, 'dropzone_store'])->name('dropzone.store');
Route::get('/pdf_upload', [UploadController::class, 'pdf_upload'])->name('pdf.upload');
Route::post('/pdf/store', [UploadController::class, 'pdf_store'])->name('pdf.store');