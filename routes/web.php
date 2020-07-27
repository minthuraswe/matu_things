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

Auth::routes();

Route::get('/dashboard', 'HomeController@index');

//Route List for Admin
Route::group(['namespace'=>'Backend', 'middleware'=> 'auth'], function(){
    Route::resource('/pd', 'ProductController');
    Route::get('/pd/price/asce', 'ProductController@asce');
    Route::resource('/cat', 'CategoryController');
    Route::get('/search', 'SearchController@index');
});

//Route List for User
Route::group(['namespace' => 'Frontend'], function(){
    Route::get('/', 'HomeController@index');
    Route::get('/products', 'ProductController@index');
    Route::get('/gallery', 'ImageController@index');
    Route::get('/contact', 'ContactController@index');
    Route::get('/products/{id}/{name}', 'ProductController@categoryProduct');
});
