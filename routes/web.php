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
    Route::get("/update_profil/{id}", "update_profil")->name("update_profil");
    Route::get("/buat_pertemuan/{id}", "create")->name("pengguna.create");
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
Route::prefix('admin')->group(function () {
    Route::get("/news_manage", [AdminController::class, 'news'])->name("news_manage");
    Route::get("/delete_news/{id}", [AdminController::class, 'delete_news'])->name("delete_news");
    Route::get("/home", [AdminController::class, 'admin_home'])->name("admin.home");
    Route::get("/buat_pertemuan", [AdminController::class, 'admin_form'])->name("admin.form");
    Route::get("/kelas/{id}", [AdminController::class, 'admin_kelas'])->name("admin.kelas");
    Route::get("/profil/{user}", [AdminController::class, 'admin_profil'])->name("admin.profil");
    Route::get("/list/{name}", [AdminController::class, 'admin_list'])->name("admin.list");
});

Route::prefix('super_admin')->group(function () {
    Route::get("/home", [AdminController::class, 'superadmin_home'])->name("spadmin.home");
    Route::get("/kelas", [AdminController::class, 'superadmin_kelas'])->name("spadmin.kelas");
    Route::get("/guru", [AdminController::class, 'superadmin_guru'])->name("spadmin.guru");
    Route::get("/arsip", [AdminController::class, 'superadmin_arsip'])->name("spadmin.arsip");
    Route::post("/tambah_kelas", [AdminController::class, 'add_kelas'])->name("spadmin.add_kelas");
    Route::post("/murid/store", [AdminController::class, 'superadmin_store_murid'])->name("spadmin.store_murid");
    Route::post("/guru/store", [AdminController::class, 'superadmin_store_guru'])->name("spadmin.store_guru");
    Route::post("/guru/update/{id}", [AdminController::class, 'superadmin_update_guru'])->name("spadmin.update_guru");
    Route::post("/kelas/detail/update/{id}", [AdminController::class, 'superadmin_update_murid'])->name("spadmin.update_murid");
    Route::get("/guru/create", [AdminController::class, 'superadmin_create_guru'])->name("spadmin.create_guru");
    Route::post("/guru/delete/{id}", [AdminController::class, 'superadmin_destroy_guru'])->name("spadmin.destroy_guru");
    Route::post("/murid/delete/{id}", [AdminController::class, 'superadmin_destroy_murid'])->name("spadmin.destroy_murid");
    Route::post("/kelas/delete/{id}", [AdminController::class, 'superadmin_destroy_kelas'])->name("spadmin.destroy_kelas");
    Route::get("/kelas/detail/create/{name}/{id}", [AdminController::class, 'superadmin_create_murid'])->name("spadmin.create_murid");
    Route::get("/kelas/detail/{name}/{id}", [AdminController::class, 'superadmin_detail_kelas'])->name("spadmin.detail_kelas");
    Route::get("/kelas/edit/{id}", [AdminController::class, 'superadmin_edit_murid'])->name("spadmin.edit_murid");
    Route::get("/guru/edit/{id}", [AdminController::class, 'superadmin_edit_guru'])->name("spadmin.edit_guru");
    Route::get("/profil/{user}", [AdminController::class, 'spadmin_profil'])->name("spadmin.profil");
    Route::post("/profil/update/{id}", [AdminController::class, 'spadmin_update_profil'])->name("spadmin.update_profil");
});


// superadmin_store_guru
Route::resource('/pertemuan', PertemuanController::class);
Route::resource('/user', UserController::class);
