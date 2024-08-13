<?php

use App\Http\Controllers\payments\mpesa\MpesaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function(MpesaController $mpesaController){
    $accessToken = $mpesaController->getAccessToken();
    return view('welcome', ['accessToken' => $accessToken]);
})->name('home');

Route::post('get-token', [MpesaController::class, 'getAccessToken'])->name('mpesa-get-token');

Route::post('register-urls', [MpesaController::class, 'registerURLS'])->name('mpesa-register-urls');
