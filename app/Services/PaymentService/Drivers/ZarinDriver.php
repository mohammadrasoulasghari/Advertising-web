<?php

namespace App\Services\PaymentService\Drivers;

use App\Models\User;
use App\Services\PaymentService\Core\interfaces\PaymentDriver;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Collection;
use Http;

class ZarinDriver implements PaymentDriver
{

    public function pay(Authenticatable|User $user, int $amount = 10000, Collection|null $additionalData)
    {
        $data = [
            "merchant_id" => env('ZARINPAL_MERCHENT'),
            'amount' => $amount,
            'callback_url' => route('checkout.verify'),
            'description' => 'this is a test',
        ];
        // $jsonData = json_encode($data);

        // $ch = curl_init('https://api.zarinpal.com/pg/v4/payment/request.json');
        // curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //     'Content-Type: application/json',
        //     'Content-Length: ' . strlen($jsonData)
        // ));

        // $result = curl_exec($ch);
        // $err = curl_error($ch);
        // $result = json_decode($result, true, JSON_PRETTY_PRINT);
        // curl_close($ch);

        $responce = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ])->post('https://sandbox.zarinpal.com/pg/v4/payment/request.json', $data);

        dd($responce)


        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            if (empty($result['errors'])) {
                if ($result['data']['code'] == 100) {
                    header('Location: https://www.zarinpal.com/pg/StartPay/' . $result['data']["authority"]);
                }
            } else {
                echo 'Error Code: ' . $result['errors']['code'];
                echo 'message: ' .  $result['errors']['message'];
            }
        }
    }


    public function verify(Authenticatable|User $user, array $data)
    {
        $Authority = $_GET['Authority'];
        $data = array("merchant_id" => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "authority" => $Authority, "amount" => 1000);
        $jsonData = json_encode($data);
        $ch = curl_init('https://api.zarinpal.com/pg/v4/payment/verify.json');
        curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v4');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)
        ));

        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result, true);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            if ($result['data']['code'] == 100) {
                echo 'Transation success. RefID:' . $result['data']['ref_id'];
            } else {
                echo 'code: ' . $result['errors']['code'];
                echo 'message: ' .  $result['errors']['message'];
            }
        }
    }
}
