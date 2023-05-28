<?php

namespace App\Http\Controllers;

use App\Models\Pertemuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

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
    public function profil(string $name)
    {
        $nama = $name;
        $data = [
            'id' => DB::table('users')->where('name', $nama)->pluck('id')->first(),
            'name' => DB::table('users')->where('name', $nama)->pluck('name')->first(),
            'kelas_id' => DB::table('users')->where('name', $nama)->pluck('kelas_id')->first(),
            'image' => DB::table('users')->where('name', $nama)->pluck('image')->first(),
            'email' => DB::table('users')->where('name', $nama)->pluck('email')->first(),
            'password' => DB::table('users')->where('name', $nama)->pluck('password')->first(),
        ];
        return view('frontend.profil_user')->with('data', $data);
    }
    public function updateProfil(Request $request, $id)
    {
        $update = User::find($id);

        $imageName = time().".".$request->gambar->extension();

        $request->gambar->storeAs('public/images', $imageName);
        $update->update([
            'name' => $request->name,
            
            'gambar' => $imageName
        ]);
        return redirect('admin');
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
