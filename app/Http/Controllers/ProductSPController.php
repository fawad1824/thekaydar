<?php

namespace App\Http\Controllers;

use App\Models\ProductSP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductSPController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $title = "Dashboard";
        $title1 = "Product Specification";

        $ProductSP = ProductSP::where('user_id',Auth::user()->id)->get();
        return view('ProductSP.index', compact('title', 'title1', 'ProductSP'));
    }

    public function addProductSP(Request $request)
    {
        $title = "Specification";
        $title1 = "Add Product Specification";

        return view('ProductSP.create', compact('title', 'title1'));
    }
    public function storeProductSP(Request $request)
    {
        if ($request->id) {
            $ProductSP =  ProductSP::where('id', $request->id)->first();
            $ProductSP->name = $request->name;
            $ProductSP->unit = $request->unit;
            $ProductSP->user_id = Auth::user()->id;
            $ProductSP->save();
            return redirect()->route('specification')->with("message", "Product Specification updated successfully");
        }
        $ProductSP = new ProductSP();
        $ProductSP->name = $request->name;
        $ProductSP->unit = $request->unit;
        $ProductSP->user_id = Auth::user()->id;
        $ProductSP->save();

        return redirect()->route('specification')->with("message", "Product Specification add successfully");
    }

    public function deleteProductSP($id)
    {
        $ProductSP = ProductSP::find($id)->delete();
        return redirect()->route('specification')->with("message", "Product Specification deleted successfully");
    }

    public function editProductSP($id)
    {
        $ProductSP = ProductSP::find($id);
        $title = "Specification";
        $title1 = "Edit Product Specification";
        return view('ProductSP.create', compact('title', 'title1', 'ProductSP'));
    }
}
