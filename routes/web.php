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

//Route::get('/welcome', function () {
//    return view('welcome');
//});
//JSON Routes

Route::get('api/categories', 'JsonController@categories');
Route::get('api/categorybyid/{id}','JsonController@categoryById');
Route::get('api/productsbycategory', 'JsonController@productsByCategory');

Auth::routes();

Route::get('/', 'ShopController@index')->name('shopping');
Route::get('/shop/categories', 'ShopController@categories');
Route::get('/shop/cart', 'ShopController@showCart');
Route::get('/shop/cart/checkout', 'ShopController@showCheckout');
Route::get('/shop/{product}', 'ShopController@show');


Route::get('/admin', 'AdminController@index');


Route::resource('/category', 'CategoryController');
Route::resource('/product', 'ProductController');

