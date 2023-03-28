<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Products;
use App\Models\ProductSP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function products()
    {
        $title = "Home";
        $title1 = "Products";
        $product = Products::all();

        return view('products.index', compact('title', 'title1', 'product'));
    }

    public function Addproducts()
    {

        $title = "Add Products";
        $title1 = "Products";
        $category = Category::where('user_id', Auth::user()->id)->get();
        $productSpec = ProductSP::where('user_id', Auth::user()->id)->get();
        return view('products.create', compact('title', 'title1', 'category', 'productSpec'));
    }

    public function Editproducts($id)
    {
        $title = "Edit Products";
        $title1 = "Products";
        $productSpec = Products::where('id', $id)->get();
        return view('products.create', compact('title', 'title1'));
    }
    public function Deleteproducts($id)
    {
        $productSpec = Products::where('id', $id)->delete();
        return redirect()->route('products')->with("message", "Products deleted successfully");
    }
    public function StoreProducts(Request $request)
    {

        $product = new Products();
        $product->name = $request->name;
        $product->user_id = Auth::user()->id;
        $product->category_id = $request->category;
        $product->specification = $request->specification;
        $product->gallery_id;
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->desc = $request->desc;
        // $product->gallery_id = "1";
        if ($request->hasFile('feature')) {
            $file = $request->file('feature');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $product->feature_img = $filename;
        }
        $product->save();
        return redirect()->route('products')->with("message","Product Added successfully");


        $images = array();
        if ($files = $request->file('gallery')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move('images/', $name);
                $images[] = $name;
            }
        }
        Gallery::insert([
            'pic' =>  implode("|", $images),
        ]);



        if ($request->id) {
        }
    }

    public function singleproduct($id)
    {
        return $id;
    }
}
