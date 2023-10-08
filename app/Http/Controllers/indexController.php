<?php

namespace App\Http\Controllers;


use App\Models\Plan;
use App\Models\Category;
use App\Models\Advertising;
use App\Repositories\AdvertisingsRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\PlanRepository;
use Illuminate\Http\Request;

class indexController extends Controller
{
    private $advertising;
    private  $category;
    private $plan;
    public function __construct(AdvertisingsRepository $advertising,CategoryRepository $category,PlanRepository $plan)
    {
        $this->advertising=$advertising;
        $this->category=$category;
        $this->plan=$plan;
    }

    public function index()
    {
        $categories = $this->category->all();
        $user_info = auth()->user()?->name;
        $user = auth()->user();
        $plans = $this->plan->all();
        return view('index', compact('categories', 'user_info', 'user', 'plans'));
    }
    public function showAdvertisings(Request $request)
    {
        $advertisingsShow =$this->advertising->all();
        $filters = $request->only('search');
        $advertisings = Advertising::filterr($filters)->get();
        $categories = $this->category->all();
        return view('show-advertisings', compact('advertisings', 'categories','advertisingsShow'));
    }
    public function showCategoryPost(Request $request)
    {
        $filters = $request->only('search');
        $advertisings = $this->advertising->paginate(1);
        return view('show-categories', compact('advertisings'));
    }
}
