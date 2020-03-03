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

Route::get('/blank', 'HomeController@blank')->name('blank');

Route::get('/index01', 'HomeController@index01')->name('index01');

Route::get('/index02', 'HomeController@index02')->name('index02');

Route::get('/index03', 'HomeController@index03')->name('index03');
