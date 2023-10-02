<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function indexPage()
    {
        return view('panel-admin.panel');
    }
    public function addCategory()
    {
        $categories = Category::all();
        return view('panel-admin.add-category', compact('categories'));
    }
    public function ShowdeletePage()
    {
        $categories = Category::all();
        return view('panel-admin.delete-category', compact('categories'));
    }
}
