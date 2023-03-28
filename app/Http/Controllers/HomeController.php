<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Productreview;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $title = "Home";
        $title1 = "Dashboard";

        $product = Products::count();
        $productRe = Productreview::count();
        $productBook = Booking::count();

        return view('home', compact('title', 'title1','product','productRe','productBook'));
    }

    public function register(Request $request)
    {
        return $request->all();
    }
}
