<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
