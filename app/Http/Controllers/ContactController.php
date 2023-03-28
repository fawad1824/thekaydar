<?php

namespace App\Http\Controllers;

use App\Models\Booking;
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
    public function reviewProduct()
    {
        $title = "Home";
        $title1 = "Product Review";
        $order = Booking::with('user')->where('user_id', Auth::user()->id)->where('status', '2')->get();
        return view('vendor.review', compact('title', 'title1', 'order'));
    }
    public function reviewProductCreate($id)
    {
        $title = "Home";
        $title1 = "Add Product Review";
        $product = Products::where('id', $id)->first();
        return view('vendor.Createreview', compact('title', 'title1', 'product'));
    }
}
