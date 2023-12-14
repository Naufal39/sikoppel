<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class beritaController extends Controller
{
    public function index(Berita $berita){
        $limitCategories1 = Category::select("*")->offset(0)->limit(4)->get(); //memulai data mulai dari 0-1
        $limitCategories2 = Category::select("*")->offset(5)->limit(8)->get(); //memulai data mulai dari 1-2
        // "newposts" => Berita::with(['$category', '.......'])->last(), //kalo lebih dari dua relasi pake array
        // $datapage = Berita::paginate(4);
        // $except = Berita::all()->last();
        // $exceptberita = Berita::all()->skip($except);

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = "Halaman Berita dan Isu dengan Kategori " . $category->nama;
        }
        else
        $title = "Publikasi";

        return view('/beritadanisu/berita', [
            "title" => $title,
            "posts" => Berita::latest()->filter(request(['search', 'category', 'user']))->paginate(5)->withQueryString(),//menampilkan semua table database dengan 'with' sebagai eager loaded agar queri sedikit
            "categories" => Category::all(),
            "categories1" => $limitCategories2,
            "deskripsi" => 'Temukan informasi terbaru dihalaman ini'
        ]);
    }

    public function show(Berita $berita){ //mencari single berita yang dikirim dari WEB dengan metode MODEL BINDING
        return view('beritadanisu/isiberita', [
            "title" => $berita->title,
            "post" => $berita,
        ]);
    }
}
