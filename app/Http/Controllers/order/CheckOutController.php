<?php

namespace App\Http\Controllers\order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\PaymentService\Drivers\PayDriver;
use App\Services\PaymentService\Core\PaymentService;


class CheckOutController extends Controller
{
    public function checkOut()
    {
        return view('pay.factor');
    }
    public function pay(Request $request)
    {
        $user = auth()->user();
        $amount = $request->input('amount', 1200);
        $factorNumber = $request->input('factor_number', 1222);
        $servicePayment = new PaymentService(new PayDriver());
        $servicePayment->pay($amount, $factorNumber);
    }
    public function verify()
    {
    }
}
