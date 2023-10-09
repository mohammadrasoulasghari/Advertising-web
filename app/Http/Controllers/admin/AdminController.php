<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Advertising;
use App\Repositories\AdvertisingsRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\PlanRepository;
use App\Repositories\UserRepositories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct(private AdvertisingsRepository $advertising,private CategoryRepository $category, private PlanRepository $plan, private UserRepositories $user){

    }

    public function indexPage()
    {
        $adversting = $this->advertising->all();
        return view('panel-admin.category.panel', compact('adversting'));
    }
    public function addCategory(CategoryRepository $category)
    {
        $categories = $this->category->all();
        return view('panel-admin.category.add-category', compact('categories'));
    }
    public function ShowdeleteCategoryPage()
    {
        $categories = $this->category->all();
        return view('panel-admin.category.delete-category', compact('categories'));
    }
    public function showEditCategoryPage(Request $request, Category $category)
    {
        $category = $this->category->find($category->id);
        return view('panel-admin.category.edit-category', compact('category'));
    }
    public function addAdversting()
    {
        $user_id = auth()->user()->id;
        $categories = $this->category->all();
        return view('panel-admin.adversting.add-adversting', compact('categories', 'user_id'));
    }
    public function showDeleteAdverstingPage()
    {
        $adversting =$this->category->all();
        return view('panel-admin.adversting.delete-adversting', compact('adversting'));
    }
    public function showEditAdverstingPage(Request $request, Advertising $adversting)
    {
        $adversting = $this->advertising->find($adversting->id);
        $categories = $this->category->all();
        $user_id = auth()->user()->id;
        return view('panel-admin.adversting.edit-adversting', compact('adversting', 'categories', 'user_id'));
    }
    public function listUsers()
    {
        $users = $this->user->all();
        return view('panel-admin.users.list-users', compact('users'));
    }
    public function showEditUsersPage(User $user)
    {
        $user = $this->user->find($user->id);
        return view('panel-admin.users.edit-users', compact('user'));
    }
}
