<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardUploadController;


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

Route::get('/', function () {
    return view('beranda',[
        "title" => "Beranda",
        "active" => "beranda"
    ]);
});
Route::get('/tentang', function () {
    return view('tentang',[
        "title" => "Tentang",
        "active" => "tentang",
        "name" => "Puskesmas jatinom",
        "email" => "PuskesmasJatinom@gmail.com",
        "image" => "puskesmas.jpg"
    ]);
});

Route::get('/berita',[UploadController::class, "index"] );
Route ::get("/berita/{upload:slug}", [UploadController::class, "show"] );

Route::get('/categories', function(){
    return view("categories",[
        "title" => "Upload categories",
        "active" => "categories",
        "categories" => Category::all()
    ]);
});

route::get("/login",[LoginController::class, "index"])->name("login")->middleware("guest");
route::post("/login",[LoginController::class, "authenticate"]);
route::post("/logout",[LoginController::class, "logout"]);



route::get("/register",[RegisterController::class, "index"])->middleware("guest");

route::post("/register",[RegisterController::class, "store"]);

route::get("/dashboard", function(){
    return view("dashboard.index");
})->middleware("auth");

route::get("/dashboard/berita/checkSlug", [DashboardUploadController::class, "checkSlug"])
->middleware("auth");
route::resource("/dashboard/berita", DashboardUploadController::class)
->middleware("auth");


