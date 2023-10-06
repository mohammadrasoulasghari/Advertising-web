<?php

namespace App\Services\PaymentService\Drivers;

use App\Models\User;
use App\Services\PaymentService\Core\interfaces\PaymentDriver;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class PayDriver implements PaymentDriver
{
    public function pay(Authenticatable|User $user, int $amount, Collection|null $additionalData): Collection
    {

        $result = Http::post('https://pay.ir/pg/send', [
            'api'          => config('payment.drivers.pay.api_key'),
            'amount'       => $amount,
            'redirect'     => route('checkout.verify'),

        ]);

        $result = $result->json();

        if ($result['status']) {
            return collect([
                'status' => true,
                'token' => $result['token'],
                'redirect_url' => 'https://pay.ir/pg/' . $result['token'],
            ]);
        } else {
            //TODO log error message in tracking error tools
            return collect([
                'status' => false,
                'message' => $result['errorMessage'],
            ]);
        }
    }

    public function verify(Authenticatable|User $user, array $data): Collection
    {
        $result = Http::post('https://pay.ir/pg/verify', [
            'api'          => config('payment.drivers.pay.api_key'),
            'token'       => $data['token'],
        ]);
        $result = $result->json();
        if (isset($result['status'])) {
            if ($result['status'] == 1) {

                //TODO check permission number by price payment 
                return collect([
                    'status' => true,
                    'data' => [
                        'permission' => 2,
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
