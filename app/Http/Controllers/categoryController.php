<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function show(Category $category){ //mencari single berita yang dikirim dari WEB dengan metode MODEL BINDING
        $limitCategories1 = Category::select("*")->offset(0)->limit(1)->get(); //memulai data mulai dari 0-1
        $limitCategories2 = Category::select("*")->offset(1)->limit(2)->get(); //memulai data mulai dari 1-2
        
        return view('beritadanisu/berita', [
            "title" => $category->nama,
            "posts" => $category->berita->load('category', 'user'), //load gaperlu array []
            "newposts" => $category->berita->last(),
            "category" => $category->nama,
            "categories" => $limitCategories1,
            "categories1" => $limitCategories2,
            "deskripsi" => "Halaman yang menampilkan kategori $category->nama"
        ]);
    }
}