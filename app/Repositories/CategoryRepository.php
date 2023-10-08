<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryRepository extends Repository
{


    public function model()
    {
        return \App\Models\Category::class;
    }
}
