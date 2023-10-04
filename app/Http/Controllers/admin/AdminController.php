<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Advertising;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AdminController extends Controller
{
    public function indexPage()
    {
        $adversting = Advertising::all();
        return view('panel-admin.category.panel', compact('adversting'));
    }
    public function addCategory()
    {
        $categories = Category::all();
        return view('panel-admin.category.add-category', compact('categories'));
    }
    public function ShowdeleteCategoryPage()
    {
        $categories = Category::all();
        return view('panel-admin.category.delete-category', compact('categories'));
    }
    public function showEditCategoryPage(Request $request, Category $category)
    {
        $category = Category::find($category->id);
        return view('panel-admin.category.edit-category', compact('category'));
    }
    public function addAdversting()
    {
        $user_id = auth()->user()->id;
        $categories = Category::all();
        return view('panel-admin.adversting.add-adversting', compact('categories', 'user_id'));
    }
    public function showDeleteAdverstingPage()
    {
        $adversting = Advertising::all();
        return view('panel-admin.adversting.delete-adversting', compact('adversting'));
    }
    public function showEditAdverstingPage(Request $request, Advertising $adversting)
    {
        $adversting = Advertising::find($adversting->id);
        $categories = Category::all();
        $user_id = auth()->user()->id;
        return view('panel-admin.adversting.edit-adversting', compact('adversting', 'categories', 'user_id'));
    }
    public function listUsers()
    {
        $users = User::all();
        return view('panel-admin.users.list-users', compact('users'));
    }
    public function showEditUsersPage(User $user)
    {
        $user = User::find($user->id);
        return view('panel-admin.users.edit-users', compact('user'));
    }
}
