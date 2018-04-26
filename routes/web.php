<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'CategoryPageController@view')->name('home');
Route::get('/category/{category?}', 'CategoryPageController@view')->name('category');
Route::get('/article/{article}', 'ArticlePageController@view')->name('article');

Route::get('users/{id}/destroy', 'UsersController@destroy')->name('users/destroy');

Route::auth();

Route::middleware('auth')->group(function () {
    Route::get('mypage', function () {

        $articles=auth()->user()->articles()->map->id;
        $articles=App\Article::whereIn('id', $articles)->paginate(9);

        return view('mypage', compact('articles'));
    })->name('mypage');
    Route::get('mypage/settings', 'UsersController@settings')->name('mypage.settings');
    Route::post('mypage/update', 'UsersController@update')->name('mypage.update');
    Route::post('mypage/delete', 'UsersController@delete')->name('mypage.delete');
});