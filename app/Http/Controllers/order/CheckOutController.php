<?php

namespace App\Http\Controllers\order;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\PaymentService\Drivers\PayDriver;
use App\Services\PaymentService\Core\PaymentService;
use App\Services\PaymentService\Drivers\ZarinDriver;


class CheckOutController extends Controller
{

    public function checkOut(Plan $plan)
    {
        $plan = Plan::find($plan->id);
        return view('pay.factor', compact('plan'));
    }
    public function pay(Request $request)
    {
        $user = auth()->user();
        $amount = (int) $request->input('amount', 12000);
        $type_permission = $request->input('type_permission');
        $type_payment = $request->input('type_payment') == 'pay' ? new PayDriver() : new ZarinDriver();
        $servicePayment = new PaymentService($type_payment);
        $result = $servicePayment->payment($user, $amount, collect([
            'permission' => $type_permission,
        ]));
        if ($request->input('type_payment') == 'pay') {
             if ($result->get('status')) {
                 return redirect()->away($result->get('redirect_url'));
             } else {
                 return back()->withErrors($result->get('message'));
             }
        }
    }

    public function verify(Request $request)
    {

        $user = auth()->user();
        if (!$request->status == 1) {
            return back()->withErrors('خطایی رخ داده است');
        }
        $servicePayment = new PaymentService(new PayDriver());
        $result = $servicePayment->verify($user, $request->all());
        if ($result->get('status')) {
            dd('aaa');
//            User::query()->find($user->id)->update([
//                'permission' => $result->get('data')['permission'],
//            ]);
            return redirect()->route('index')->with('success', $result->get('message'));
        } else {
            dd('سسسسس');
            return back()->withErrors($result->get('message'));
        }
    }
}
