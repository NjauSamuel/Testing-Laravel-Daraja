<?php

namespace App\Http\Controllers\payments\mpesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MpesaResponsesController extends Controller
{
    public function validation(Request $request){
        Log::info('Validation Endpoint Hit!');
        Log::info($request->all());
    }
    public function confirmation(Request $request){
        Log::info('Confirmation Endpoint Hit!');
        Log::info($request->all());
    }
}
