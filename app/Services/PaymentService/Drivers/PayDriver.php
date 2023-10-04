<?php

namespace App\Services\PaymentService\Drivers;

use App\Services\PaymentService\Core\interfaces\Payment;
use Illuminate\Support\Facades\Http;

class PayDriver implements Payment
{
                 public function send($amount, $factorNumber)
                 {
                                  $result = Http::post('https://pay.ir/pg/send', [
                                                   'api'          => config('payment.drivers.pay.api_key'),
                                                   'amount'       => $amount,
                                                   'redirect'     => route('checkout.verify'),
                                                   'factorNumber' => $factorNumber,
                                  ]);
                                  $result = $result->json();
                                  dd($result);
                                  if ($result->status) {
                                                   $go = "https://pay.ir/pg/$result->token";
                                                   header("Location: $go");
                                  } else {
                                                   echo $result->errorMessage;
                                  }
                 }

                 public function vrify($token)
                 {
                 }
}
