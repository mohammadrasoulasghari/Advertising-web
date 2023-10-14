<?php

namespace App\Services\PaymentService\Drivers;

use App\Models\User;
use App\Services\PaymentService\Core\interfaces\PaymentDriver;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class IdPayDriver implements PaymentDriver
{

    /**
     * @param $data
     * @return Collection
     */
    public function pay($amount, $uuid)
    {

//        $value = Plan::find($data);
        $result = Http::withHeaders([
            'X-API-KEY' => '6a7f99eb-7c20-4412-a972-6dfb7cd253a4',
            'X-SANDBOX' => true,
        ])->post('https://api.idpay.ir/v1.1/payment', [
            'order_id' => rand(),
            'amount' => $amount,
            'callback' => route('checkout.verify.idpay', ['uuid' => $uuid['uuid']])
        ]);
        $result = $result->json();

        if ($result['id']) {
            return collect([
                'status' => true,
                'order_data' => $result,
            ]);
        }
    }

    public function verify(User|Authenticatable $user, array $data)
    {
        dd($data);
        $result = Http::withHeaders([
            'X-API-KEY' => '6a7f99eb-7c20-4412-a972-6dfb7cd253a4',
            'X-SANDBOX' => true,
        ])->post('https://api.idpay.ir/v1.1/payment/verify', [
            'id' => $data['id'],
            'order_id' => $data['order_id']
        ]);

        if (isset($result['status'])) {
            if ($result['status'] == 100) {

                return collect([
                    'status' => true,
                    'data' => [
                        'permission' => $data['permission'],
                        'amount' => $data['amount'],
                        'plan_id' => $data['plan_id'],
                        'type_payment' => $data['driver']
                    ],
                    'message' => 'عملیات موفقیت آمیز بود'
                ]);
            } else {
                return collect([
                    'status' => false,
                    'message' => 'تراکنش با خطا مواجه شد'
                ]);
            }
        } else {
            return collect([
                'status' => false,
                'message' => 'خطایی رخ داده است'
            ]);
        }
    }
}
