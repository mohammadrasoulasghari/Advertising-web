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

    public function pay(Authenticatable|User $user, int $amount = 10000, Collection|null $additionalData)
    {
        $result = Http::withHeaders([
            'X-API-KEY' => '6a7f99eb-7c20-4412-a972-6dfb7cd253a4',
            'X-SANDBOX' => '1',
        ])->post('https://api.idpay.ir/v1.1/payment', [
            'order_id' => '101',
            'amount' => '10000',
            'callback' => route('checkout.verify', $additionalData->toArray())
        ]);
        $result = $result->json();
        $params = [
            'id' => $result['id'],
            'order_id' => '101',
        ];
        $redirect = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-API-KEY' => '6a7f99eb-7c20-4412-a972-6dfb7cd253a4',
            'X-SANDBOX' => '1',
        ])->post('https://api.idpay.ir/v1.1/payment/verify');
        dd($redirect);
        if ($result['id']) {
            return collect([
                'status' => true,
                'redirect_url' => $redirect,
            ]);
        }
    }


    public function verify(Authenticatable|User $user, array $data)
    {
    }
}
