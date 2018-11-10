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

// Route::get('/home', 'HomeController@index')->name('home');
Route::post('/soaldua', 'HomeController@soal2')->name('soal2');
Route::get('/numbertwo', 'HomeController@numbertwo')->name('numbertwo');
Route::get('/sixseven', 'HomeController@sixseven')->name('sixseven');
