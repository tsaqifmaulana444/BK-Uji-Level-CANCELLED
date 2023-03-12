<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::controller(LandingPageController::class)->group(function(){
    Route::get("/", "index")->name("/");
});

Route::controller(LoginController::class)->group(function(){
    Route::get("/login", "index")->name("/login");
});

Route::controller(LoginController::class)->group(function(){
    Route::get("/signup", "sign_up")->name("/signup");
});

Route::controller(AdminController::class)->group(function(){
    Route::get("/admin", "index")->name("/admin");
});