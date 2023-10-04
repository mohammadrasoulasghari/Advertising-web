<?php
namespace App\Services\PaymentService\Core\interfaces;


interface Payment
{
                 public function send($amount, $factorNumber);
                 public function vrify($token);
}
