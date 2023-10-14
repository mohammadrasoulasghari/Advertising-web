<?php

namespace App\Services\PaymentService\Drivers;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Http as FacadesHttp;
use App\Services\PaymentService\Core\interfaces\PaymentDriver;
use Symfony\Component\Mailer\Exception\HttpTransportException;

class IdPayDriver implements PaymentDriver
{

    public function pay(Authenticatable|User $user, int $amount, Collection|null $additionalData)
    {
        $result = Http::withHeaders([
            'X-API-KEY' => '6a7f99eb-7c20-4412-a972-6dfb7cd253a4',
            'X-SANDBOX' => true,
        ])->post('https://api.idpay.ir/v1.1/payment', [

            'order_id' => rand(),
            'amount' => $amount,
            'callback' => route('checkout.verify.idpay', $additionalData->toArray())
        ]);
        $result = $result->json();
        if ($result['id']) {
            return collect([
                'status' => true,
                'redirect_url' => $result['link'],

            ]);
        }
    }

    public function verify(User|Authenticatable $user, array $data)
    {
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
                        'type_payment' =>$data['driver']
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
