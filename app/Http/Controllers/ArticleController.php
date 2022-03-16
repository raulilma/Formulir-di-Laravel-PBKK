<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        return view('article', [
            "title" => "Posts", 
            "articles" => Article::all()
        ]);
    }

    public function content(Article $article){
        return view('konten', [
            "article" => $article
        ]);
    }
}
