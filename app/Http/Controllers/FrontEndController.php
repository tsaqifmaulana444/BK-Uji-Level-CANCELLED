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
    public function contact_person()
    {
        return view ("frontend.contact");
    }
    public function berita()
    {
        return view ("frontend.news");
    }
    public function home()
    {
        return view('frontend.dashboard_user');
    }
    public function profil()
    {
        return view('frontend.profil_user');
    }
    public function create()
    {
        return view('frontend.create_meet');
    }
    public function get_all()
    {
        return view('frontend.list_meet');
    }
}
