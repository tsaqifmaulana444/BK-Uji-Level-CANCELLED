<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FrontEndController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(FrontEndController::class)->group(function(){
    Route::get("/", "index")->name("/");
});

Route::controller(FrontEndController::class)->group(function(){
    Route::get("/kritik_saran", "kritik_saran")->name("kritik_saran");
});

Route::controller(FrontEndController::class)->group(function(){
    Route::get("/about_us", "about_us")->name("about_us");
});

Route::controller(LoginController::class)->group(function(){
    Route::get("/login", "index")->name("login");
});

Route::controller(LoginController::class)->group(function(){
    Route::get("/signup", "sign_up")->name("signup");
});

Route::controller(AdminController::class)->group(function(){
    Route::get("/admin", "index")->name("admin");
});