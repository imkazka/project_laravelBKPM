<?php
use Illuminate\Support\Facades\Route;

Route:: group(['namespace'=> 'App\Http\Controllers'], function()
{
Route:: resource('/dashboard', 'DashboardController');
});