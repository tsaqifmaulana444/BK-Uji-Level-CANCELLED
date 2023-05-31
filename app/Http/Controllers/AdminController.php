<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Berita;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\callback;

class AdminController extends Controller
{
    public function news()
    {
        $datas = Berita::all();
        return view('backend.news_manage', [
            "datas" => $datas
        ]);
    }
    public function delete_news($id)
    {
        $datas = Berita::find($id);
        $datas->delete();

        return redirect("/news_manage")->with("success", "Mapel berhasil di hapus");

    }
    
    public function admin_home()
    {
        $message = session()->get('success');
        return view('backend.main_admin', compact('message'));
    }
    public function admin_kelas()
    {
        $datas = DB::table('kelas')->paginate(12);
        return view('backend.admin_kelas', compact('datas'));
    }

    public function admin_profil(User $user)
    {
        !$user->kelas_id ? abort(404) : "";
        $user = User::with('kelas')->find($user->id);
        return view('backend.admin_profil', compact('user'));

    }
    
    public function admin_list(string $name)
    {
        $nama = $name;
        $datas = DB::table('pertemuans')->where('nama', $nama)->paginate(5);
        return view('backend.admin_detail_page', compact('datas'));
    }
    public function admin_form()
    {
        return view('backend.admin_form');
    }

    public function superadmin_home()
    {
        return view('backend.main_superadmin');
    }

    public function superadmin_kelas()
    {
        return view('backend.spadmin_kelas');
    }
    public function superadmin_guru()
    {
        return view('backend.spadmin_guru');
    }
    public function superadmin_create_guru()
    {
        return view('backend.spadmin_create_guru');
    }
    public function superadmin_arsip()
    {
        return view('backend.spadmin_arsip');
    }

    public function spadmin_profil(User $user)
    {
        !$user->kelas_id ? abort(404) : "";
        $user = User::with('kelas')->find($user->id);
        return view('backend.spadmin_profil', compact('user'));

    }
}
