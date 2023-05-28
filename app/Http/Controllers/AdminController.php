<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Http\Request;

use function PHPUnit\Framework\callback;

class AdminController extends Controller
{
    public function index()
    {
        $datas = User::with(['kelas'])->whereNotNull('kelas_id')->get();
        return view('backend.main_admin', compact('datas'));
    }
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
        return view('backend.main_admin');
    }
    public function superadmin_home()
    {
        return view('backend.main_superadmin');
    }
}
