<?php

namespace App\Http\Controllers\order;

use App\Http\Controllers\Controller;
use App\Http\Requests\PayRequest;
use App\Models\orders;
use App\Models\Plan;
use App\Models\User;
use App\Services\PaymentService\Core\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use zarinpal;

class CheckOutController extends Controller
{

    public function checkOut(Plan $plan)
    {
        $plan = Plan::find($plan->id);
        return view('pay.factor', compact('plan'));
    }

    public function pay(PayRequest $request)
    {

        $plan = Plan::find($request->plan_id);
        $user = auth()->user();
        $servicePayment = new PaymentService();

        $data = [
            'user_id' => $user->id,
            'plan_id' => $plan->id,
        ];
        $uuid = (string) Str::uuid();

        info('uuid', [$uuid]);
        Redis::setex($uuid, 60, json_encode($data));
        $result = $servicePayment->driver($request->input('type_payment'))->pay($plan->price, [
            'uuid' => $uuid,
            'driver' => $request->input('type_payment')
        ]);
        if ($result->get('status')) {
            return redirect()->secure($result->get('order_data')['link']);
        } else {

            return back()->withErrors($result->get('message'));
        }
    }

    public function verify(Request $request, User $user, orders $orders)
    {
        dd($request->driver);
        $data =json_decode(Redis::get($request->uuid),true);
        $plan =Plan::find($data['plan_id']);

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
            $permission = $plan->permission;
            $amount = $plan->price;
            $planId = $data['plan_id'];
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
