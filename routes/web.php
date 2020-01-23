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
Route::get('/', 'HomeController@index');
Route::get('/wigs', 'WigsController@index');
Route::get('/wigs/{category}', 'WigsController@showCountry');
Route::get('/wigs/{category}/{product}', 'WigsController@showSingleProduct');
