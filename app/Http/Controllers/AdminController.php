<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

use function PHPUnit\Framework\callback;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.main_admin');
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
}
