<?php

use App\Http\Controllers\ManagementUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Halaman default Laravel
});

Route::get('/home', function () {
    return view('home'); // Menampilkan halaman utama
})->name('home');

// Route Resource untuk User
Route::resource('user', ManagementUserController::class);

Route::get('/home', [ManagementUserController::class, 'index']);