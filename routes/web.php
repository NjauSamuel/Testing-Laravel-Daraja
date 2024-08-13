<?php

use App\Http\Controllers\payments\mpesa\MpesaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('get-token', [MpesaController::class, 'getAccessToken'])->name('mpesa-get-token');
