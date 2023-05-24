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
    Route::get("/kritik_saran", "kritik_saran")->name("kritik_saran");
    Route::get("/about_us", "about_us")->name("about_us");
    Route::get("/contact", "contact_person")->name("contact");
    Route::get("/news", "berita")->name("news");
});

Route::controller(LoginController::class)->group(function(){
    Route::get("/login", "index")->name("login");
    Route::get("/signup", "sign_up")->name("signup");
});

Route::controller(AdminController::class)->group(function(){
    Route::get("/admin", "index")->name("admin");
    Route::get("/news_manage", "news")->name("news_manage");
    Route::get("/delete_news/{id}", "delete_news")->name("delete_news");
});