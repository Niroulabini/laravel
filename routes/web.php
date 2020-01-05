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

Route::get('/home', 'Backend\HomeController@index')->name('home');
// category
Route::get('/home/category', 'Backend\CategoryController@index')->name('category');
Route::post('/home/category/store', 'Backend\CategoryController@store')->name('category_store');
// item
Route::get('/home/item', 'Backend\ItemController@index')->name('item');
Route::post('/home/item/store', 'Backend\ItemController@store')->name('item_store');