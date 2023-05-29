<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pertemuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $name = Auth::user()->name;
        $datas = [];
        $datas['successMessage'] = session()->get('success');
        $datas['total'] = Pertemuan::where('nama', $name)->count();

        return view('frontend.dashboard_user', compact('datas'));
    }
    public function create()
    {
        return view('frontend.create_meet');
    }
    public function get_all(string $name)
    {
        $nama = $name;
        $datas = DB::table('pertemuans')->where('nama', $nama)->paginate(5);
        return view('frontend.list_meet', compact('datas'));
    }
}
