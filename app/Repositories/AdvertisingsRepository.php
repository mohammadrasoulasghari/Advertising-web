<?php

namespace App\Repositories;

use App\Models\Advertising;
use Illuminate\Support\Facades\DB;

class AdvertisingsRepository extends Repository
{
    public function model()
    {
        return \App\Models\Advertising::class;
    }
}
