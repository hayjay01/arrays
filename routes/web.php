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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view/category', 'CategoryController@show');

Route::post('/add/category', 'CategoryController@create');

Route::get('/delete/category/{id}', 'CategoryController@destroy');

Route::get('/view/posts', 'PostController@show');

Route::post('/create/post', 'PostController@create');


// Route::match(['get', 'post', 'CategoryController@create']);
