<?php

namespace App\Services\PaymentService\Core\interfaces;


use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Collection;

interface PaymentDriver
{
    public function pay(User $user, int $amount, Collection|null $additionalData);

    public function verify(User $user, array $data);

}
