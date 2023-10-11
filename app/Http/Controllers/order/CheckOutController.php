<?php

namespace App\Http\Controllers\order;

use App\Services\typePayment;
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
    public function pay(Request $request)
    {
        $gateway=new typePayment();
        $user = auth()->user();
        $amount = (int) $request->amount;
        $plan_id = (int) $request->planId;
        $type_permission = $request->permission;
        $type_payment = $gateway->typePayment($request->input('type_payment'));
        $servicePayment = new PaymentService($type_payment);
        $result = $servicePayment->payment($user, $amount, collect([
            'permission' => $type_permission,
            'amount' => $amount,
            'plan_id' => $plan_id,
        ]));

        if ($result->get('status')) {
            return redirect()->secure($result->get('redirect_url'));
        } else {

            return back()->withErrors($result->get('message'));
        }
    }

    public function verify(Request $request, User $user, orders $orders)
    {
        $gateway=new typePayment();
        $type_payment = $gateway->typePayment($request->input('type_payment'));
        $user = auth()->user();

        if (!$request->status == 1) {
            dd('Invalid');
            return back()->withErrors('خطایی رخ داده است');
        }

        $servicePayment = new PaymentService(new PayDriver());
        $result = $servicePayment->verify($user, $request->all());
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
