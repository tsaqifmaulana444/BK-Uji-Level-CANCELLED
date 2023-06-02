<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
   
    public function login(LoginRequest $req)
    {
        // dd($req->all());
        $user = User::where('name', $req->name)->first();

        if(!$user || !Hash::check($req->password, $user->password)){
            return redirect()->route('login')->with('error', 'Email Atau Password Salah, Coba Lagi');
        }

        Auth::login($user);

        if(Auth::user()->role == '0'){
            session()->flash('success', 'Selamat datang!');
            return redirect()->route('home');
        }else if(Auth::user()->role == '1'){
            session()->flash('success', 'Selamat datang!');
            return redirect()->route('admin.home');
        }else if(Auth::user()->role == '2'){
            session()->flash('success', 'Selamat datang!');
            return redirect()->route('spadmin.home');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('/');
    }
    
}
