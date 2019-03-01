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
Route::get('/products', 'Api\ProductController@index')->middleware('api.auth');
//rotta products create
Route::post('/products', 'Api\ProductController@create')->middleware('api.auth');
//rotta product show
Route::get('/products/{id}', 'Api\ProductController@show')->middleware('api.auth');
//rotta products modifica
Route::post('/products/{id}', 'Api\ProductController@update')->middleware('api.auth');
//rotta products cancella
Route::post('/products/{id}/delete', 'Api\ProductController@destroy')->middleware('api.auth');
