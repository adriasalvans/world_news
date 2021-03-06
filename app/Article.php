<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";

    protected $fillable = ['title','content','image','category_id']; //camps permesos per mostrar els JSON.

    public function category(){

        return $this->belongsTo('App\Category');
    }
}
