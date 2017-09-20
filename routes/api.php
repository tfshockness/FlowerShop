<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categories', 'JsonController@categories');
Route::get('category/{id}','JsonController@categoryById');
Route::get('productsbycategory', 'JsonController@productsByCategory');
Route::post('addtocart', 'JsonController@addToCart');
Route::get('cart', 'JsonController@getCartSession');