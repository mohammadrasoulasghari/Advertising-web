<?php

namespace App\Http\Controllers;

use App\Models\Advertising;
use Illuminate\Http\Request;

class AdvertisingController extends Controller
{
    public function store(Request $request)
    {
        Advertising::create($request->all());
    }
}
