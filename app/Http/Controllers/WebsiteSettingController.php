<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteSettingController extends Controller
{
    public function index()
    {
        $title = "Setting";
        $title1 = "Add Setting";
        return view('setting.index', compact('title', 'title1'));
    }
}
