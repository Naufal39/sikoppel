<?php

namespace App\Http\Controllers;

use App\Models\Berita as ModelsBerita;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Category;

class indexController extends Controller
{
    public function index(){
        return view('index', [
            "posts" => Berita::latest()->paginate(2),
            "title" => 'Home',
        ]);
    }
}
