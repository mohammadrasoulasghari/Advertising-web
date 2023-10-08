<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function store(StoreCategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug,
            'icon' => $request->icon
        ]);
        return redirect(route('add.category'))->with('alert', 'برند شما با موفقیت افزوده شد');
    }
    public function storeDelete(Request $request, Category $category)
    {
        $category = Category::find($category->id);
        $category->delete();
        return redirect(route('delete.category'))->with('alert', 'برند شما با موفقیت افزوده شد');
    }
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect(route('showEditPage', $category->id))->with('alert', 'برند شما با موفقیت افزوده شد');
    }
}
