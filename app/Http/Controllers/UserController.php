<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Advertising;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('panel-user.index', compact('user'));
    }
    public function delete(User $user)
    {
        $user = User::find($user->id);
        $user->delete();
        return redirect(route('list.users'));
    }
    public function edit(Advertising $advertising)
    {
        $adversting = Advertising::find($advertising->id);
        $categories = Category::all();
        $user = auth()->user();
        return view('panel-user.edit-advertising', compact('adversting', 'categories', 'user'));
    }
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect(route('advertising.update'));
    }
    public function editProfile()
    {
        $user = auth()->user();
        return view('panel-user.edit-profile', compact('user'));
    }
    public function updateProfile(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'bio' => $request->bio,
            'age' => $request->age
        ]);
        return redirect(route('edit.profile'));
    }
}
