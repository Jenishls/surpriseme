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

Route::get('/','PagesController@index' );
// Route::get('/product','PagesController@product' );



Route::resource('/', 'IndexController');
Route::resource('product','ProductController');


Route::resource('category','CategoryController');

// Route::resource('/subcategory','SubCategoryController');

Route::get('/subcategory/{id}','SubCategoryController@show')->name('subController.show');
Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::get('empty','CartController@empty')->name('cart.empty');
Route::delete('cart/{product}','CartController@destroy')->name('cart.destroy');
Route::post('/search/','SearchController@show')->name('search.show');
// Route::destroy()->name();
Auth::routes();
Route::get('/home', 'HomeController@index');








?>