<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\PertemuanController;

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
    Route::get("/home", "home")->name("home");
    Route::get("/profil/{name}", "profil")->name("user.profil");
    Route::get("/buat_pertemuan", "create")->name("user.create");
    Route::get("/daftar_pertemuan/{name}", "get_all")->name("user.get_all");
});

Route::controller(LoginController::class)->group(function(){
    Route::middleware(['guest'])->group(function(){
        Route::get("/login", "index")->name("login");
        Route::post("/login", "login")->name("post.login");
        Route::get("/signup", "sign_up")->name("signup");
    });
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(AdminController::class)->group(function(){
    Route::get("/admin", "index")->name("admin");
    Route::get("/news_manage", "news")->name("news_manage");
    Route::get("/delete_news/{id}", "delete_news")->name("delete_news");
    Route::get("/admin/home", "admin_home")->name("admin.home");
    Route::get("/super_admin/home", "superadmin_home")->name("spadmin.home");
});

Route::resource('/pertemuan', PertemuanController::class);
