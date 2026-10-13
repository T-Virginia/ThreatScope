<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ThreatsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/history', [ThreatsController::class, 'history']);
});

Route::controller(ThreatsController::class)->group(function ()
{
    Route::get('/threats/{ip}', 'threats');
});