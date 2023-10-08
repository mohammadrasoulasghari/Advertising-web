<?php

namespace App\Repositories;

class PlanRepository extends Repository
{

    public function model()
    {
        return \App\Models\Plan::class;
    }
}
