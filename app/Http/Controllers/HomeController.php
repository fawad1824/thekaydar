<?php

namespace App\Http\Controllers;

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

        $title = "Specification";
        $title1 = "Edit Product Specification";

        return view('home',compact('title','title1'));
    }

    public function register(Request $request)
    {
        return $request->all();
    }
}
