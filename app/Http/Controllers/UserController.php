<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect(route('list.users'));
    }
}
