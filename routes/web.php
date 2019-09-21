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


Route::get('/', function () {
    return view('welcome');
});

Route::get('test', 'TestController@index');
Route::get('test/create', 'TestController@create');
Route::post('test/store', 'TestController@store');
Route::get('test/edit/{id}', 'TestController@edit');
Route::put('test/update/{id}', 'TestController@update');
