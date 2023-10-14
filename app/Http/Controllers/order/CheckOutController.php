<?php

namespace App\Http\Controllers\order;

use App\Http\Requests\PayRequest;
use App\Services\typePayment;
use Dflydev\DotAccessData\Data;
use zarinpal;
use App\Models\Plan;
use App\Models\User;
use App\Models\orders;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\PaymentService\Drivers\PayDriver;
use App\Services\PaymentService\Drivers\IdPayDriver;
use App\Services\PaymentService\Core\PaymentService;

class CheckOutController extends Controller
{

    public function checkOut(Plan $plan)
    {
        $plan = Plan::find($plan->id);
        return view('pay.factor', compact('plan'));
    }
    public function pay(PayRequest $request)
    {
        $plan=Plan::find($request->plan_id);
        $user = auth()->user();
        $servicePayment = new PaymentService();
        $result= $servicePayment->driver($request->input('type_payment'))->pay($user, $plan->price*10, collect([
            'permission' => $plan->permission,
            'plan_id' => $plan->id,
            'amount' =>$plan->price*10,
            'driver' => $request->input('type_payment')
        ]));
//        $result= $servicePayment->driver($request->input('type_payment'))->pay( $plan->price*10,'');


        if ($result->get('status')) {
            return redirect()->secure($result->get('redirect_url'));
        } else {

            return back()->withErrors($result->get('message'));
        }
    }

    public function verify(Request $request, User $user, orders $orders)
    {
//        $gateway=new typePayment();
//        $type_payment = $gateway->typePayment($request->driver);
        $user = auth()->user();
        if (!$request->status = 1) {
            dd('Invalid');
            return back()->withErrors('خطایی رخ داده است');
        }
        $servicePayment = new PaymentService();

        $result = $servicePayment->driver($request->driver)->verify($user, $request->all());
        if ($result->get('status')) {
            $permission = $result->get('data')['permission'];
            $amount = $result->get('data')['amount'];
            $planId = $result->get('data')['plan_id'];
            $user->update(['permission' => $permission]);
            $orders->create([
                'user_id' => $user->id,
                'amount' => $amount,
                'plan_id' => $planId
            ]);
            return redirect()->route('index')->with('success', $result->get('message'));
        } else {
            dd('سسسسس');
            return back()->withErrors($result->get('message'));
        }
    }
}
