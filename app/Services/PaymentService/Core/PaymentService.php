<?php

use App\Services\PaymentService\Core\interfaces\PaymentInterface;

class PaymentService
{
                 private $paymentDriver;
                 public function __construct($paymentDriver)
                 {
                                  $this->paymentDriver = $paymentDriver;
                 }
                 public function pay($amount, $factorNumber)
                 {
                 }
}
