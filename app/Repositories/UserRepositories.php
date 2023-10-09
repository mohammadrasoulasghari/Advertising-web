<?php

namespace App\Repositories;

use App\Models\User;

class UserRepositories extends Repository
{

    public function model()
    {
        return User::class;
    }
}
