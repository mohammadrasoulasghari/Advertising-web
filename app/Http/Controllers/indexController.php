<?php

namespace App\Http\Controllers;


use App\Models\Plan;
use App\Models\Category;
use App\Models\Advertising;
use App\Models\User;
use App\Repositories\AdvertisingsRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\PlanRepository;
use App\Repositories\UserRepositories;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function __construct(private AdvertisingsRepository $advertising,private CategoryRepository $category, private PlanRepository $plan, private UserRepositories $user){

    }


    public function index()
    {
        $categories = $this->category->paginate();
        $user_info = auth()->user()?->name;
        $user = auth()->user();
        $plans = $this->plan->paginate();
        return view('index', compact('categories', 'user_info', 'user', 'plans'));
    }
    public function showAdvertisings(Request $request)
    {
        $advertisings = $this->advertising->paginate();
        $filters = $request->only('search');
        $advertisings = Advertising::filterr($filters)->get();
        $categories = $this->category->paginate();
        return view('show-advertisings', compact('advertisings', 'categories', 'advertisings'));
    }
    public function showCategoryPost(Request $request,Category $category)
    {
        $filters = $request->only('search');
        $advertising = Advertising::all()->where('category_id',$category->id);
        return view('show-categories', compact('advertising'));
    }
}
