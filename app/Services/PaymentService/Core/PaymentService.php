<?php

namespace App\Services\PaymentService\Core;



class PaymentService
{
                 private $paymentDriver;
                 public function __construct($paymentDriver)
                 {
                                  $this->paymentDriver = $paymentDriver;
                 }
                 public function pay($amount, $factorNumber)
                 {
                                  $this->paymentDriver->send($amount, $factorNumber);
                 }
}
