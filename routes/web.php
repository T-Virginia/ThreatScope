<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ThreatsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::controller(ThreatsController::class)->group(function ()
{
    Route::get('/history', 'history');
    Route::get('/threats/{ip}', 'threats');
});