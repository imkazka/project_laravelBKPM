<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;



Route::get('/session/create', [SessionController::class, 'create']);
Route::get('/session/show', [SessionController::class, 'show']);
Route::get('/session/delate', [SessionController::class, 'delate']);
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
Route::get('/cobaerror', [CobaController::class,'index']);
Route::get('/cobaerror/{nama}', [CobaController::class,'index']);