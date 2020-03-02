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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Product'], function () {
    Route::get('/product', 'ProductController@index')->name('product');
});

Route::group(['namespace' => 'Order'], function () {
    Route::get('/order', 'OrderController@index')->name('product');
});

