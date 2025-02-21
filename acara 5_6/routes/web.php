<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Pastikan UserController memiliki method index()
Route::get('/user', [UserController::class, 'index']);
