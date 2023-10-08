<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    private $categories;
    public function __construct(CategoryRepository $categories)
    {
        $this->categories = $categories;
    }

    public function store(StoreCategoryRequest $request)
    {
        $data=[
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug,
            'icon' => $request->icon];
           $this->categories->create($data);
        return redirect(route('add.category'))->with('alert', 'برند شما با موفقیت افزوده شد');
    }
    public function storeDelete(Request $request, Category $category)
    {
        $category = $this->categories->find($category->id);
        $category->delete();
        return redirect(route('delete.category'))->with('alert', 'برند شما با موفقیت افزوده شد');
    }
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect(route('showEditPage', $category->id))->with('alert', 'برند شما با موفقیت افزوده شد');
    }
}
