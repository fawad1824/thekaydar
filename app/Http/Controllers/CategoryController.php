<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $title = "Dashboard";
        $title1 = "Categories";

        $category = Category::where('user_id',Auth::user()->id)->get();
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
            $category->user_id = Auth::user()->id;
            $category->save();
            return redirect()->route('category')->with("message", "Category updated successfully");
        }
        $category = new Category();
        $category->name = $request->name;
        $category->user_id = Auth::user()->id;
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
