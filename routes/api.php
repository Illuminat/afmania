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

Route::get('users', 'Api\UsersController@index');
Route::get('users/{id}', 'Api\UsersController@show')->where('id', '[0-9]+');
Route::post('users', 'Api\UsersController@store');
Route::put('users/{id}', 'Api\UsersController@update')->where('id', '[0-9]+');
Route::delete('users/{id}', 'Api\UsersController@delete')->where('id', '[0-9]+');
