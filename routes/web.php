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

Auth::routes();
Route::get('/', 'ShopController@index');
Route::get('/shop/categories', 'ShopController@categories');
Route::get('/shop/{product}', 'ShopController@show');
Route::get('/admin', 'AdminController@index');
Route::resource('/category', 'CategoryController');
Route::resource('/product', 'ProductController');
Route::get('/api/productsbycategory', function(){
    $categories = App\Category::with('products')->whereName('Featured')->first();
    return $categories;
});

Route::get('/api/categories', function(){
   $categories = App\Category::all();
   return $categories;
});

Route::get('/api/categorybyid/{id}', function($id){
    $categories = App\Category::find($id)->with('products')->get();
    return $categories;
});