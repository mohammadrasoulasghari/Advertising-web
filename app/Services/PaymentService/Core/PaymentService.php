<?php

namespace App\Services\PaymentService\Core;


use App\Models\User;
use App\Services\PaymentService\Core\interfaces\PaymentDriver;
use App\Services\PaymentService\Drivers\IdPayDriver;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Collection;

class PaymentService
{
    protected $driver;
    public function driver($driver)
    {
        $this->driver=config('payment')['drivers'][$driver]['class'];
        return $this->driver;
    }

    public function pay(Authenticatable|User $user,int $amount, Collection|null $additionalData = null)
    {
        return $this->driver->pay($user, $amount, $additionalData);
    }
    public function verify(Authenticatable|User $user, array $data)
    {
        return $this->driver->verify($user, $data);
    }


}
