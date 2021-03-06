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
Route::get('/','MainController@index')->name('home');
Route::get('/listing','MainController@listing')->name('listing');
//Route::get('/listing','MainController@listing')->name('listing');
Route::get('/cafes/{id}','MainController@cafeView')->name('restaurants.view');
Route::get('/detail','MainController@detail')->name('detail');