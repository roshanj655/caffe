<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::prefix('menu')->group(function () {
Route::get('get','menuController@index');
Route::get('getbycat/{id}','menuController@menubycat');
Route::post('add','menuController@store');
//Route::put('edit','menuController@store');
Route::get('get/{id}','menuController@show');
});

Route::prefix('category')->group(function () {
Route::get('get','categoryController@index');
Route::post('add','categoryController@store');
//Route::put('edit','categoryController@edit');
Route::get('get/{id}','categoryController@show');
});