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

Route::get('/', function() {
  return 'ciao';
});

//rotta products index
Route::get('/products', 'Api\ProductController@index');
//rotta products create
Route::post('/products', 'Api\ProductController@create');
