<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', 'LoginController@index')->name('masuk');
//tambahan
Route::post('auth','LoginController@authenticate');
Route::get('product', 'ProductsController@index');
Route::get('addproduct', 'ProductsController@create');
Route::get('product/{product}/editproduct', 'ProductsController@edit');
//tambahan
Route::post('product/{product}/update','ProductsController@update');
Route::post('product', 'ProductsController@store');
Route::delete('product/{product}', 'ProductsController@destroy');

Route::get('user', 'UserController@index');
Route::get('adduser', 'UserController@create');
Route::get('user/{user}/edituser', 'UserController@edit');
//tambahan
Route::post('user/{user}/update', 'UserController@update');
Route::post('user', 'UserController@store');
Route::delete('user/{user}', 'UserController@destroy');*/

Route::get('/','VideoController@index');
Route::get('video','VideoController@index');
Route::get('addvideo','VideoController@add');
Route::get('video/{video}/playvideo','VideoController@play');
Route::post('video','VideoController@upload');
Route::delete('video/{video}','VideoController@destroy');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');