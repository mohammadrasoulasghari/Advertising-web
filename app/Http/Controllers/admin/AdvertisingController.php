<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\StoreAdvertisingRequest;
use App\Models\Advertising;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdvertisingController extends Controller
{
    public function store(StoreAdvertisingRequest $request)
    {

        Advertising::create($request->all());
        return redirect(route('add.adversting'))->with('alert', 'successss');
    }
    public function update(Request $request, Advertising $advertising)
    {
        $advertising->update($request->all());
        return redirect(route('advertising.update', $advertising->id))->with('alert', 'successss');
    }
    public function storeDelete(Request $request, Advertising $advertising)
    {
        $advertising = Advertising::find($advertising->id);
        $advertising->delete();
        return redirect(route('showDeleteAdverstingPage'))->with('alert', 'برند شما با موفقیت افزوده شد');
    }
}
