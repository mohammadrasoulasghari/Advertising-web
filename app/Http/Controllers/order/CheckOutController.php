<?php

namespace App\Http\Controllers\order;

use App\Models\orders;
use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\PaymentService\Drivers\PayDriver;
use App\Services\PaymentService\Core\PaymentService;
use App\Services\PaymentService\Drivers\ZarinDriver;
use Illuminate\Support\Arr;
use zarinpal;

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
        $amount = (int) $request->amount;
        $plan_id = (int) $request->planId;
        $type_permission = $request->permission;
        $type_payment = $request->input('type_payment') == 'pay' ? new PayDriver() : new ZarinDriver();
        $servicePayment = new PaymentService(new PayDriver());
        $result = $servicePayment->payment($user, $amount,collect([
            'permission' => $type_permission,
            'amount' => $amount,
            'plan_id' =>$plan_id,
        ]));

            if ($result->get('status')) {
                return redirect()->secure($result->get('redirect_url'));
            } else {
                return back()->withErrors($result->get('message'));
            }

    }

    public function verify(Request $request, User $user,orders $orders)
    {
       $type_payment = $request->input('type_payment') == 'zarinpal' ? new ZarinDriver : new PayDriver();
        $user = auth()->user();

            if (!$request->status == 1) {
                dd('Invalid');
                return back()->withErrors('خطایی رخ داده است');
            }

        $servicePayment = new PaymentService(new PayDriver());
        $result = $servicePayment->verify($user, $request->all());
        if ($result->get('status')) {
            $permission=$result->get('data')['permission'];
            $amount=$result->get('data')['amount'];
            $planId=$result->get('data')['plan_id'];
            $user->update(['permission' => $permission]);
            $orders->create([
                'user_id' => $user->id,
                'amount'=>$amount,
                'plan_id'=>$planId
            ]);
            return redirect()->route('index')->with('success', $result->get('message'));
        } else {
            dd('سسسسس');
            return back()->withErrors($result->get('message'));
        }
    }
}
