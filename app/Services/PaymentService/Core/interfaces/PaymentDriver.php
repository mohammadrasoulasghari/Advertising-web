<?php

namespace App\Services\PaymentService\Core\interfaces;


use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Collection;

interface PaymentDriver
{
    public function pay(Authenticatable|User $user, int $amount, Collection|null $additionalData);

    public function verify(Authenticatable|User $user, array $data);

}
