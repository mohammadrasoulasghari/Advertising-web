<?php

namespace App\Repositories;

class UserRepositories extends Repository
{

    public function model()
    {
        return \App\Models\User::class;
    }
}
