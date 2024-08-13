<?php

use App\Http\Controllers\payments\mpesa\MpesaResponsesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('validation', [MpesaResponsesController::class, 'validation']);

Route::post('confirmation', [MpesaResponsesController::class, 'confirmation']);
