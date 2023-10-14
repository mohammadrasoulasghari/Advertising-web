<?php

namespace App\Services\PaymentService\Core\interfaces;


use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Collection;

interface PaymentDriver
{
    public function pay($amount,$uuid);

    public function verify(User $user, array $data);

}
