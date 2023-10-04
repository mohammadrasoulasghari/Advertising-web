<?php

namespace App\Http\Controllers\order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function checkOut()
    {
    }
    public function pay(Request $request)
    {
        $user = auth()->user();
        $amount = $request->input('amount');
        $factorNumber = $request->input('factor_number');
    }
    public function verify()
    {
    }
}
