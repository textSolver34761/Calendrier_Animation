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

//Route::get('/share', function()
//{
//	return Share::load('http://www.benjaminpradon.tech', 'Mon Calendrier')->twitter();
//});

//Route::get('/', function()
//{
//	return Share::load('http://www.benjaminpradon.tech', 'My example')->facebook();
//});
