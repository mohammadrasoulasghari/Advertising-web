<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Advertising;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class AdvertisinfUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = auth()->user();
        $user_id = auth()->user()->id;
        $categories = Category::all();
        return view('panel-user.add-advertising', compact('categories', 'user_id', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Advertising::create($request->all());
        return redirect(route('advertising.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = auth()->user();
        $id = auth()->user()->id;
        $adversting = Advertising::where('user_id', '=', $id)->get();
        return view('panel-user.delete-advertising', compact('user', 'adversting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertising $advertising)
    {
        $advertising->update($request->all());
        return redirect(route('advertising.update', $advertising->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertising $advertising)
    {
        $advertising = Advertising::find($advertising->id);
        $advertising->delete();
        return redirect(route('advertising.show.list'));
    }
}
