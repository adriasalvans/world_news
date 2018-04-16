<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;


class CategoryPageController extends Controller
{
    public function view($id=null){

        $articles = Article::orderBy('id','ASC')->paginate(9);
        $articles->each(function($articles){
            $articles->category;
        });
    

        if($id and $id !='1') {
    
            $category= Category::find($id);
        }
        else{

            
            $category= Category::find(1);
            
        }

        return view('category', ['category' => $category, 'articles' => $articles]);



    }
}
