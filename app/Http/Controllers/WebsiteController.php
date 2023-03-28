<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Products;
use App\Models\ProductSP;
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

        $products = Products::with('productuser')->paginate(6);
        return view('Website.products', compact('products'));
    }
    public function productSingle()
    {
        # code...
    }
    public function vendors()
    {
        $user = User::where('role', '2')->get();
        return view('Website.vendor', compact('user'));
    }
    public function vendorsProduct($id)
    {
        $user = User::where('id', $id)->first();
        $products = Products::where('user_id', $id)->with('productuser')->paginate(6);
        return view('Website.singlevendor', compact('user', 'products'));
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
        $productsa = Products::with('productuser')->paginate(3);
        $products = Products::with('productuser')->where('id', $id)->first();
        $productsPe = ProductSP::where('id', $products->specification)->first();
        return view('Website.singleproduct', compact('products', 'productsa', 'id', 'productsPe'));
    }
    public function singlevendor()
    {
        # code...
    }

    public function bookingproduct(Request $request)
    {
        if ($request->productID) {

            $productsss =  Products::where('id', $request->productID)->first();
            $productsuser =  Products::where('id', $request->productID)->first();
            if ($request->qty >= $productsss->qty) {
                return redirect()->back()->with("message", "This QTY " . $request->qty . " Not Available Right Now");
            }

            $totalqty = $productsss->qty - $request->qty;
            $productsss->qty = $totalqty;
            $productsss->save();
        }
        $booking = new Booking();
        $booking->user_id = Auth::user()->id;
        $booking->user_product = $productsuser->user_id;
        $booking->product_id = $request->productID;
        $booking->email = $request->email;
        $booking->tele = $request->tele;
        $booking->whats = $request->whats;
        $booking->address = $request->Address;
        $booking->qty = $request->qty;
        $booking->unit = $request->unit;
        $booking->status = "1";
        $booking->save();
        return redirect()->back()->with("message", "Booking Added successfully");
    }
}
