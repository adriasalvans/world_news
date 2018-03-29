<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlePageController extends Controller
{
    public function view($id){

        $article= Article::find($id);
        $article->category;

        return view('article', ['article' => $article]);

    }
}
