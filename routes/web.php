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

Route::get('/', function () {
    return view('welcome');
});

Route::get('page/{cat}/{id}', function ($cat, $id) {
    echo $id.' | '.$cat;
    // return view('page');
})->where(['cat'=>'[A-Za-z]+', 'id'=>'[0-9]+']);

Route::get('/article/{id}', ['as'=>'article', function ($id) {
    echo $id;
}]);

Route::group([], function () {

    Route::get('page/create', function () {

        return redirect()->route('article', ['id'=> 25]);
        // echo 'page/create';
    });

});
