<?php

namespace App\Http\Controllers;


use App\Models\Plan;
use App\Models\Category;
use App\Models\Advertising;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $user_info = auth()->user()?->name;
        $user = auth()->user();
        $plans = Plan::all();
        return view('index', compact('categories', 'user_info', 'user', 'plans'));
    }
    public function showAdvertisings(Request $request)
    {
        $filters = $request->only('search');
        $advertisings = Advertising::filterr($filters)->get();
        $categories = Category::all();
        return view('show-advertisings', compact('advertisings', 'categories'));
    }
    public function showCategoryPost(Request $request, Category $category)
    {
        $filters = $request->only('search');
        $advertisings = Advertising::all()->where('category_id', $category->id);
        return view('show-categories', compact('advertisings'));
    }
}
