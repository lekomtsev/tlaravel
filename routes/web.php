<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', ['as'=>'home' ,function () {
    return view('welcome');
}]);

Route::get('/admin', ['as'=>'admin', 'middleware'=>'auth', 'uses'=>'Admin\IndexController@show']);

Route::get('/about/{id}', 'FirstController@show');

Route::get('/articles', ['uses'=>'Admin\Core@getArticles', 'as'=>'articles']);

Route::get('/article/{page}', ['uses'=>'Admin\Core@getArticle', 'as'=>'article', 'middleware'=>'mymiddle']);

// Route::resource('/pages', 'Admin\CoreResource');

// Route::controller('/pages', 'PagesController');
