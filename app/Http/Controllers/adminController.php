<?php

namespace App\Http\Controllers;

use App\Models\Advertising;
use App\Models\Category;
use Illuminate\Http\Request;

class adminController extends Controller
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
        $categories = Category::all();
        return view('panel-admin.adversting.add-adversting', compact('categories'));
    }
    public function showDeleteAdverstingPage()
    {
        $adversting = Advertising::all();
        return view('panel-admin.adversting.delete-adversting', compact('adversting'));
    }
    public function showEditAdverstingPage(Request $request, Advertising $adversting)
    {
        $adversting = Advertising::find($adversting->id);
        return view('panel-admin.adversting.edit-adversting', compact('adversting'));
    }
}
