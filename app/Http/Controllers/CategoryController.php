<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug,
            'icon' => $request->icon
        ]);
    }
    public function storeDelete(Request $request, Category $id)
    {
        $category = Category::find($id->id);
        $category->delete();
    }
}
