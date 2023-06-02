<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Berita;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
    public function admin_kelas($id)
    {
        $datas = Kelas::query()->where('guru_id', $id)->paginate(12);
        return view('backend.admin_kelas', compact('datas'));
    }

    public function admin_profil(User $user)
    {
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
        $message = session()->get('success');
        return view('backend.main_superadmin', compact('message'));
    }

    public function superadmin_kelas()
    {
        $datas = Kelas::query()->paginate(12);
        return view('backend.spadmin_kelas', compact('datas'));
    }

    public function superadmin_detail_kelas($name, $id)
    {
        $datas = User::where('role', 0)->where('kelas_id', $id)->paginate(7);
        return view('backend.spadmin_detail_kelas', compact('datas'))->with('kelas', $name)->with('id', $id);
    }

    public function add_kelas(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Kelas::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('spadmin.kelas')->with('message', 'Kelas Berhasil Ditambahkan');
    }

    public function superadmin_guru()
    {
        $datas = User::where('role', 1)->get();
        return view('backend.spadmin_guru', compact('datas'));
    }

    public function superadmin_create_guru()
    {
        return view('backend.spadmin_create_guru');
    }

    public function superadmin_create_murid($nama, $id)
    {
        $kelas = Kelas::find($id);
        return view('backend.spadmin_create_murid')->with('kelas', $kelas);
    }

    public function superadmin_edit_guru($id)
    {
        $data = DB::table('users')->where('id', $id)->first();
        return view('backend.spadmin_edit_guru', compact('data'));
    }

    public function superadmin_edit_murid($id)
    {
        $data = User::find($id);
        return view('backend.spadmin_edit_murid', compact('data'));
    }

    public function superadmin_update_guru(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_identitas' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'no_identitas' => $request->no_identitas,
        ];

        DB::table('users')->where('id', $id)->update($data);

        return redirect()->route('spadmin.guru')->with('message', 'Data Berhasil Diubah');
    }

    public function superadmin_update_murid(Request $request, $id)
    {
        

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_identitas' => 'required',
        ]);
        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'no_identitas' => $request->no_identitas,
            
        ];

        DB::table('users')->where('id', $id)->update($data);

        return redirect()->route('spadmin.kelas')->with('message', 'Data Berhasil Diubah');
    }

    public function superadmin_store_guru(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_identitas' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_identitas' => $request->no_identitas,
            'password' => bcrypt($request->password),
            'role' =>1,
        ]);

        return redirect()->route('spadmin.guru')->with('message', 'Akun Berhasil Ditambahkan');
    }

    public function superadmin_store_murid(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kelas_id' => 'required',
            'email' => 'required',
            'no_identitas' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'kelas_id' => $request->kelas_id,
            'no_identitas' => $request->no_identitas,
            'password' => bcrypt($request->password),
            'role' =>0,
        ]);

        return redirect()->route('spadmin.kelas')->with('message', 'Akun Berhasil Ditambahkan');
    }

    public function superadmin_destroy_guru($id)
    {
        User::find($id)->delete();
        return redirect()->route('spadmin.guru')->with('message', 'Akun Berhasil Dihapus');
    }
    public function superadmin_destroy_murid($id)
    {
        User::find($id)->delete();
        return redirect()->route('spadmin.kelas')->with('message', 'Akun Berhasil Dihapus');
    }
    public function superadmin_destroy_kelas($id)
    {
        Kelas::find($id)->delete();
        return redirect()->route('spadmin.kelas')->with('message', 'Kelas Berhasil Dihapus');
    }
    public function superadmin_arsip()
    {
        return view('backend.spadmin_arsip');
    }

    public function spadmin_profil(User $user)
    {
        $user = User::with('kelas')->find($user->id);
        return view('backend.spadmin_profil', compact('user'));
    }
    public function spadmin_update_profil(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_identitas' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'no_identitas' => $request->no_identitas,
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/', $imageName);
            $data['image'] = $imageName;
        }

        $update = User::where('id', $id)->update($data);

        return redirect()->route('spadmin.home')->with('message', 'Profil Berhasil Diubah');
    }


}
