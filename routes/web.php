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

// query builder url
// test url done

Route::get('test', 'TestController@index');
Route::get('test/create', 'TestController@create');
Route::post('test/store', 'TestController@store');
Route::get('test/edit/{id}', 'TestController@edit');
Route::put('test/update/{id}', 'TestController@update');
Route::delete('test/delete/{id}', 'TestController@destroy');

// orm url
// blog url
Route::get('blog', 'BlogController@index');
Route::get('blog/create', 'BlogController@create');
Route::post('blog/store', 'BlogController@store');
Route::get('blog/edit/{id}', 'BlogController@edit');
Route::put('blog/update/{id}', 'BlogController@update');
Route::delete('blog/delete/{id}', 'BlogController@destroy');

// product url list
Route::get('product', 'ProductController@index')->name('product.index');
Route::get('product/create', 'ProductController@create')->name('product.create');
Route::post('product', 'ProductController@store')->name('product.store');
Route::get('product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::put('product/update/{id}', 'ProductController@update')->name('product.update');
Route::delete('product/delete/{id}', 'ProductController@destroy')->name('product.destroy');

// post url
Route::resource('post', 'PostController');
