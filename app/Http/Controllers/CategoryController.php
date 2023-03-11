<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $title = "Dashboard";
        $title1 = "Categories";

        $category = Category::all();
        return view('category.index', compact('title', 'title1', 'category'));
    }

    public function addCategory(Request $request)
    {
        $title = "Categories";
        $title1 = "Add Category";

        return view('category.create', compact('title', 'title1'));
    }
    public function storeCategory(Request $request)
    {
        if ($request->id) {
            $category =  Category::where('id', $request->id)->first();
            $category->name = $request->name;
            $category->save();
            return redirect()->route('category')->with("message", "Category updated successfully");
        }
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->route('category')->with("message", "Category add successfully");
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id)->delete();
        return redirect()->route('category')->with("message", "Category deleted successfully");
    }

    public function editCategory($id)
    {
        $category = Category::find($id);

        $title = "Categories";
        $title1 = "Edit Category";

        return view('category.create', compact('title', 'title1', 'category'));
    }
}
