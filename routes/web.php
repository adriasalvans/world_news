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


Route::get('/', 'CategoryPageController@view');
Route::get('/category/{category}', 'CategoryPageController@view');
Route::get('/article/{article}', 'ArticlePageController@view');


