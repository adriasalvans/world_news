<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;


class CategoryPageController extends Controller
{
    public function view($id=null){

        // $articles = Article::orderBy('id','ASC')->paginate(9);
        // $articles->each(function($articles){
        //     $articles->category;
        // });

        // $articles=categories()->articles()->map->id;
        // $articles=App\Article::whereIn('id', $articles)->paginate(9);

        if($id and $id !='1') {

            $articles=category::findOrFail($id)->articles()->paginate(9); //nou
            $category= Category::find($id);
        }
        else{

            $articles = Article::orderBy('id','ASC')->paginate(9); //nou
            $category= Category::find(1);
            
        }

        return view('category', ['articles' => $articles, 'category' => $category]);



    }
}

