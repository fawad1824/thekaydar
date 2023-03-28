<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Productreview;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function AdminController()
    {
        return view('');
    }

    public function vendorproduct($id)
    {

        $title = "Home";
        $title1 = "Vendor Orders";
        $order = Booking::with('user')->get();
        return view('vendor.product', compact('title', 'title1', 'order'));
    }
    public function customerproduct()
    {
        $title = "Home";
        $title1 = "Customers Orders";
        $order = Booking::with('user')->get();
        return view('vendor.customer', compact('title', 'title1', 'order'));
    }
    public function customerorder()
    {
        $title = "Home";
        $title1 = "Orders";
        $order = Booking::with('user')->where('user_id', Auth::user()->id)->get();
        return view('vendor.allorderr', compact('title', 'title1', 'order'));
    }
    public function orderss()
    {
        $title = "Home";
        $title1 = "Orders";
        $order = Booking::with('user')->where('user_product', Auth::user()->id)->get();
        return view('vendor.orderr', compact('title', 'title1', 'order'));
    }
    public function reviewProduct()
    {
        $title = "Home";
        $title1 = "Product Review";
        $order = Booking::with('user')->where('user_id', Auth::user()->id)->where('status', '2')->get();
        $orderR = Productreview::where('user_id', Auth::user()->id)->first();
        return view('vendor.review', compact('title', 'title1', 'order','orderR'));
    }
    public function reviewProductCreate($id)
    {
        $title = "Home";
        $title1 = "Add Product Review";
        $product = Products::where('id', $id)->first();
        return view('vendor.Createreview', compact('title', 'title1', 'product'));
    }
    public function reviewpadd(Request $request)
    {
        $producView = new Productreview();
        $producView->product_id = $request->id;
        $producView->review = $request->review;
        $producView->user_id = Auth::user()->id;
        $producView->username = Auth::user()->name;
        $producView->save();
        return redirect()->back()->with("message", "Review Added successfully");
    }public function orderstatus(Request $request,$id,$status)
    {
        $proBok=Booking::where('id',$id)->first();
        $proBok->status=$status;
        $proBok->save();
        return redirect()->back()->with("message", "Product Status Change successfully");
    }
}
