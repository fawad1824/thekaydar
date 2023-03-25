<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function contact()
    {
        # code...
    }
    public function product()
    {
        return view('Website.products');
    }
    public function productSingle()
    {
        # code...
    }
    public function vendors()
    {
        return view('Website.vendor');
    }
    public function vendorsProduct()
    {
        # code...
    }
    public function about()
    {
        return view('Website.about');
    }
    public function services()
    {
        return view('Website.services');
    }

    public function booking()
    {
        # code...
    }

    public function singleproduct($id)
    {
       $products = Products::with('productuser')->where('id',$id)->first();
       return view('Website.singleproduct', compact('products'));
    }
    public function singlevendor()
    {
        # code...
    }
}
