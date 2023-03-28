<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Userdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class vendorCn extends Controller
{
    public function index()
    {
        $title1 = "Vendor";
        $title = "Dashboard";
        $user = User::where('role', '2')->get();
        return view('vendor.index', compact('title', 'title1', 'user'));
    }
    public function customer()
    {
        $title1 = "Customer";
        $title = "Dashboard";
        $user = User::with('userdetail')->where('role', '1')->get();
        return view('vendor.index', compact('title', 'title1', 'user'));
    }
    public function profile()
    {
        $title1 = "Profile";
        $title = "Dashboard";
        $user = User::where('id', Auth::user()->id)->first();
        return view('profile', compact('title', 'title1', 'user'));
    }
    public function profileupdate(Request $request)
    {
        // return $request->all();

        $user = User::where('id', $request->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        $userDetail = Userdetail::where('id', $request->id)->first();
        $userDetail->phone = $request->phone;
        $userDetail->userid = $request->id;
        $userDetail->whatsapp = $request->whatsaapp;
        $userDetail->street = $request->street;
        $userDetail->postcode = $request->postal;
        $userDetail->city = $request->city;
        $userDetail->address = $request->address;

        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $userDetail->image = $filename;
        }
        $userDetail->save();
        return redirect()->back()->with("message", "Profile Updated successfully");
    }
}
