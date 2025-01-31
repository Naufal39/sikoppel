<?php

use App\Models\User;
use App\Models\berita;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\LapbulController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [indexController::class, 'index']);


Route::get('perizinan', function () {
    return view('/perizinan/index2', [
        "title" => "Perizinan"
    ]);
});

Route::get('/perizinan2', function () {
    return view('/perizinan/index2', [
        "title" => "Perizinan"
    ]);
});

// informasi pelabuhan
Route::get('/ppatimban', function () {
    return view('/informasipelabuhan/ppatimban', [
        "title" => "Pelabuhan Patimban"
    ]);
});

Route::get('/pcirebon', function () {
    return view('/informasipelabuhan/pcirebon', [
        "title" => "Pelabuhan Cirebon"
    ]);
});
// end informasi pelabuhan 

//laporan bulanan perusahaan


//berita
Route::get('/berita', [beritaController::class, 'index']);
Route::get('berita/{berita:slug}', [beritaController::class, 'show']); // find single berita dari Model Berita berdasarkan kolom slug
// Route::get('kategori/{category:slug}', [categoryController::class, 'show']);
// Route::get('penulis/{user:username}', function(User $user) {
//     $limitCategories1 = Category::select("*")->offset(0)->limit(1)->get(); //memulai data mulai dari 0-1
//     $limitCategories2 = Category::select("*")->offset(1)->limit(2)->get(); //memulai data mulai dari 1-2
//     return view('beritadanisu/berita', [
//         "title" => $user->name,
//         "posts" => $user->berita->load('user', 'category'),
//         "newposts" => $user->berita->load('user', 'category')->last(),
//         "penulis" => $user->name,
//         "categories" => $limitCategories1,
//         "categories1" => $limitCategories2,
//         "deskripsi" => "Berita dan Isu yang di tulis oleh $user->name"

//     ]);
// });
//end berita

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'daftar']);

Route::get('/dashboard', function () {
    return view('dashboard/index');
})->middleware('auth');

Route::get('/faq', function () {
    return view('faq', [
        'title' => 'faq'
    ]);
});

Route::resource('/dashboard/berita', DashboardPostController::class)->except(['show', 'destroy', 'edit', 'update'])->middleware('auth');
Route::get('/dashboard/berita/{berita:slug}', [DashboardPostController::class, 'show'])->middleware('auth');
Route::get('/dashboard/berita/{berita:slug}/edit', [DashboardPostController::class, 'edit'])->middleware('auth');
Route::delete('/dashboard/berita/{berita:slug}', [DashboardPostController::class, 'destroy'])->middleware('auth');
Route::put('/dashboard/berita/{berita:slug}', [DashboardPostController::class, 'update'])->middleware('auth');
Route::get('/dashboard/berita/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/laporan-bulanan', LapbulController::class)->except(['show', 'destroy', 'edit', 'update'])->middleware('auth');
Route::delete('/dashboard/laporan-bulanan/{file:id}', [LapbulController::class, 'destroy'])->middleware('auth');

//Data Dan Informasi
//Aktivitas dan Fasilitas Pelabuhan
Route::get('/ppatimban', function () {
    return view('/informasipelabuhan/data-dan-informasi/fasilitas-aktivitas-pelabuhan/patimban', [
        "title" => "Pelabuhan Patimban"
    ]);
});

Route::get('/pmarunda', function () {
    return view('/informasipelabuhan/data-dan-informasi/fasilitas-aktivitas-pelabuhan/marunda', [
        "title" => "Pelabuhan Marunda"
    ]);
});

Route::get('/pp-ppangandaran', function () {
    return view('/informasipelabuhan/data-dan-informasi/potensi-pelabuhan/pangandaran', [
        "title" => "Pelabuhan Pangandaran"
    ]);
});

Route::get('/pp-sukabumi', function () {
    return view('/informasipelabuhan/data-dan-informasi/potensi-pelabuhan/sukabumi', [
        "title" => "Kab. Sukabumi"
    ]);
});

Route::get('/pp-kota-cirebon', function () {
    return view('/informasipelabuhan/data-dan-informasi/potensi-pelabuhan/kota-cirebon', [
        "title" => "Kota. Cirebon"
    ]);
});

Route::get('/pp-kab-cirebon', function () {
    return view('/informasipelabuhan/data-dan-informasi/potensi-pelabuhan/kab-cirebon', [
        "title" => "Kab. Cirebon"
    ]);
});

Route::get('/pp-kab-garut', function () {
    return view('/informasipelabuhan/data-dan-informasi/potensi-pelabuhan/kab-garut', [
        "title" => "Kab. Garut"
    ]);
});

Route::get('/pp-kab-bekasi', function () {
    return view('/informasipelabuhan/data-dan-informasi/potensi-pelabuhan/kab-bekasi', [
        "title" => "Kab. Bekasi"
    ]);
});

Route::get('/pp-kab-subang', function () {
    return view('/informasipelabuhan/data-dan-informasi/potensi-pelabuhan/kab-subang', [
        "title" => "Kab. Subang"
    ]);
});

Route::get('/pp-kab-karawang', function () {
    return view('/informasipelabuhan/data-dan-informasi/potensi-pelabuhan/kab-karawang', [
        "title" => "Kab. Karawang"
    ]);
});

Route::get('/pp-kab-cianjur', function () {
    return view('/informasipelabuhan/data-dan-informasi/potensi-pelabuhan/kab-cianjur', [
        "title" => "Kab. Cianjur"
    ]);
});

Route::get('/pp-pindramayu', function () {
    return view('/informasipelabuhan/data-dan-informasi/potensi-pelabuhan/indramayu', [
        "title" => "Pelabuhan Indramayu"
    ]);
});

Route::get('/pp-tasikmalaya', function () {
    return view('/informasipelabuhan/data-dan-informasi/potensi-pelabuhan/tasikmalaya', [
        "title" => "Kab. Tasikmalaya"
    ]);
});

Route::get('/p-bongkarmuat', function () {
    return view('/informasipelabuhan/data-dan-informasi/perusahaan-penunjang-angkutan-laut/perusahaan-bongkar-muat', [
        "title" => "Perusahaan Bongkar Muat"
    ]);
});

// SELAYANG PANDANG
Route::get('/potensi-indramayu', function () {
    return view('/selayang-pandang/potensi-pelabuhan/indramayu', [
        "title" => "Dishub Indramayu"
    ]);
});

Route::get('/profil-jawabarat', function () {
    return view('/selayang-pandang/profil-jabar', [
        "title" => "Selayang Pandang"
    ]);
});

Route::get('/profil-dishubjabar', function () {
    return view('/selayang-pandang/profil-dishubjabar', [
        "title" => "Selayang Pandang"
    ]);
});

Route::get('/profil-uptdlaut', function () {
    return view('/selayang-pandang/profil-uptdlaut', [
        "title" => "Selayang Pandang"
    ]);
});

// END SELAYANG PANDANG