<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $user_info = auth()->user()?->name;
        return view('index', compact('categories', 'user_info'));
    }
}
