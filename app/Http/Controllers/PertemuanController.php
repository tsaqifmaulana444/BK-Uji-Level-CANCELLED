<?php

namespace App\Http\Controllers;

use App\Models\Pertemuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PertemuanController extends Controller
{

    public function store(Request $request)
    {
        $name = Auth::user()->name;
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'guru' => 'required',
            'alasan' => 'required',
        ]);

        $mahasiswa = Pertemuan::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'guru' => $request->guru,
            'alasan' => $request->alasan,
        ]);

        return redirect()->route('home')->with(['message' => 'Pertemuan Berhasil Ditambahkan', 'name' => $name]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Pertemuan::find($id);
        return view('frontend.detail_meet', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pertemuan $pertemuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pertemuan $pertemuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pertemuan $pertemuan)
    {
        //
    }
}
