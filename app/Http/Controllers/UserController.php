<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        !$user->kelas_id ? abort(404) : "";
        $user = User::with('kelas')->find($user->id);
        return view('frontend.profil_user', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // dd($request->all());
        $update = User::find($user);

        // $imageName = time().".".$request->gambar->extension();

        // $request->gambar->storeAs('public/images', $imageName);
        $update->update([
            'name' => $request->name,
            'email' => $request->email,
            // 'password' => Hash::make($request->password),
            // 'gambar' => $imageName
        ]);
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
