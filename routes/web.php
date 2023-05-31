<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    // Route::get("/profil/{name}", "profil")->name("pengguna.profil");
    Route::get("/buat_pertemuan", "create")->name("pengguna.create");
    Route::get("/daftar_pertemuan/{name}", "get_all")->name("pengguna.get_all");
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
    Route::get("/news_manage", "news")->name("news_manage");
    Route::get("/delete_news/{id}", "delete_news")->name("delete_news");
    Route::get("/admin/home", "admin_home")->name("admin.home");
    Route::get("/admin/buat_pertemuan", "admin_form")->name("admin.form");
    Route::get("/admin/kelas", "admin_kelas")->name("admin.kelas");
    Route::get("/admin/profil/{user}", "admin_profil")->name("admin.profil");
    Route::get("/admin/list/{name}", "admin_list")->name("admin.list");
    Route::get("/super_admin/home", "superadmin_home")->name("spadmin.home");
    Route::get("/super_admin/kelas", "superadmin_kelas")->name("spadmin.kelas");
    Route::get("/super_admin/guru", "superadmin_guru")->name("spadmin.guru");
    Route::get("/super_admin/arsip", "superadmin_arsip")->name("spadmin.arsip");
    Route::get("/super_admin/guru/create", "superadmin_create_guru")->name("spadmin.create_guru");
    Route::get("/super_admin/profil/{user}", "spadmin_profil")->name("spadmin.profil");
});

Route::resource('/pertemuan', PertemuanController::class);
Route::resource('/user', UserController::class);
