<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.login');
    }

    public function sign_up()
    {
        return view('frontend.signup');
    }
    public function tes()
    {
        return view('frontend.dashboard_user');
    }
    
}
