<?php

namespace App\Services\PaymentService\Core;


use App\Models\User;
use App\Services\PaymentService\Core\interfaces\PaymentDriver;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Collection;

class PaymentService
{

    public function __construct(private PaymentDriver $paymentDriver)
    {
    }

    public function payment(Authenticatable|User $user, int $amount, Collection|null $additionalData = null)
    {
        return $this->paymentDriver->pay($user, $amount, $additionalData);
    }
    public function verify(Authenticatable|User $user, array $data)
    {
        return $this->paymentDriver->verify($user, $data);
    }
}
