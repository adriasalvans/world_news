<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryPageController extends Controller
{
    public function view($id=null){

        if($id) {

            $category= Category::find($id);
            return view('category', ['category' => $category]);
        }
        else{
            $category= Category::find(1);
            return view('category', ['category' => $category]);

        }

    }
}
