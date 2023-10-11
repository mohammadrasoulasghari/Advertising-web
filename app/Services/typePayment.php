<?php

namespace App\Services;

class typePayment
{
    protected $driver;

    public function typePayment($driver)
    {
        $this->driver=$driver;
        $class=config('payment')['drivers'][$driver]['class'];
        return $class;
    }

}
