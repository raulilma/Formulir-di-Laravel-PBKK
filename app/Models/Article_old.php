<?php

namespace App\Models;

class Article_old
{
    private static $articles = [
        [
            "title" => "Ukraine vs Rusia",
            "slug" => "ukraine-rusio",
            "author" => "Russia Today",
            "body" => "Russia side - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
        ],
        [
            "title" => "Omicron di Indonesia",
            "slug" => "omicron-indonesia",
            "author" => "Pemuda Pancasila Bogor",
            "body" => "Omicron di Indonesia - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
        ]
    ];

    public static function all(){
        return self::$articles;
    }

    public function find($slug){
        $articles = collect(self::$articles);
        
        return $articles->firstWhere('slug', $slug);
    }

}
