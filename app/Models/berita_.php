<?php

namespace App\Models;

class berita
{
   private static $blog_posts = [
        [
        "title" => "Berita satu",
        "slug" => "berita-satu",
        "author" => "Didin Knalpot",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit aliquam eius soluta, blanditiis dolor, inventore iure, vitae nobis nemo et beatae magni sequi cupiditate ipsa. Facilis nobis placeat officia laborum, architecto eveniet commodi. Reiciendis voluptatibus obcaecati eligendi omnis, quis ipsum blanditiis, consectetur id rem pariatur cumque illum tempore inventore atque ea minus voluptatem cupiditate officia corporis ratione debitis! Eos, obcaecati architecto laudantium asperiores, quae deleniti non quia dolorem velit, animi culpa eveniet. Soluta, aliquam voluptatem. Nulla iste quidem, alias magni enim nemo ipsum explicabo labore id modi sint asperiores repellendus maxime autem ut odit tenetur fugiat! Amet dolore nostrum aliquam."
        ],
        [
        "title" => "Berita dua",
        "slug" => "berita-dua",
        "author" => "Didin Racing",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit aliquam eius soluta, blanditiis dolor, inventore iure, vitae nobis nemo et beatae magni sequi cupiditate ipsa. Facilis nobis placeat officia laborum, architecto eveniet commodi. Reiciendis voluptatibus obcaecati eligendi omnis, quis ipsum blanditiis, consectetur id rem pariatur cumque illum tempore inventore atque ea minus voluptatem cupiditate officia corporis ratione debitis! Eos, obcaecati architecto laudantium asperiores, quae deleniti non quia dolorem velit, animi culpa eveniet. Soluta, aliquam voluptatem. Nulla iste quidem, alias magni enim nemo ipsum explicabo labore id modi sint asperiores repellendus maxime autem ut odit tenetur fugiat! Amet dolore nostrum aliquam."
        ],
    ];    

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $singlenews = static::all();
        return $singlenews->firstWhere('slug', $slug);
    }
}
