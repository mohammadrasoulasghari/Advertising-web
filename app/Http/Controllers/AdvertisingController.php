<?php

namespace App\Http\Controllers;

use App\Models\Advertising;
use Illuminate\Http\Request;

class AdvertisingController extends Controller
{
    public function store(Request $request)
    {
        Advertising::create($request->all());
        return redirect(route('add.adversting'));
    }
    public function update(Request $request, Advertising $advertising)
    {
        $advertising->update($request->all());
        return redirect(route('index.page'));
    }
    public function storeDelete(Request $request, Advertising $advertising)
    {
        $advertising = Advertising::find($advertising->id);
        $advertising->delete();
        return redirect(route('showDeleteAdverstingPage'))->with('alert', 'برند شما با موفقیت افزوده شد');
    }
}
