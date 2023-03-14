<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view ("frontend.landing_page");
    }

    public function kritik_saran()
    {
        return view ("frontend.kritik_saran");
    }

    public function about_us()
    {
        return view ("frontend.about_us");
    }
}
