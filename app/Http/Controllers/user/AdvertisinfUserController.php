<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdvertisingRequest;
use App\Models\Advertising;
use App\Models\Category;
use App\Models\User;
use App\Repositories\AdvertisingsRepository;
use App\Repositories\UserRepositories;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class AdvertisinfUserController extends Controller
{


    public function __construct(private AdvertisingsRepository $advertising,private UserRepositories $user)
    {
    }

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

//        if (Gate::allows('check-permission')) {
//            abort(403, 'به سقف رسید');
//        }
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
    public function store(StoreAdvertisingRequest $request)
    {
        $picture_url= Storage::putFile('advertise',$request->picture_url);

        $data=[
            'name'=> $request->name,
            'description' =>$request->description,
            'slug' => $request->slug,
            'phone_number' =>$request->phone_number,
            'category_id' =>$request->category_id,
            'user_id' => $request->user_id,
            'picture_url' =>$picture_url
        ];
//        if (!Gate::allows('check-permission')) {
//            $request->merge([
//                'picture_url' => $picture_url
//            ]);
        $user=Auth::user();
             $this->advertising->create($data);
            $user->update(['last_free_post_submission' => now()]);
            return redirect()->route('advertising.show.list');
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
        return redirect(route('advertising.update', $advertising->id))->with('alert', 'successss');
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
        return redirect(route('advertising.show.list'))->with('alert', 'successss');
    }
}
