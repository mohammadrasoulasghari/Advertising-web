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

    public function pay($amount,$uuid)
    {
        return $this->driver->pay($amount,$uuid);
    }
    public function verify(Authenticatable|User $user, array $data)
    {
        return $this->driver->verify($user, $data);
    }


}
