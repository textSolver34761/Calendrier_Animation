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

Route::get('/', function()
{
	return Share::load('http://www.moncalendrieranime.fr', 'Link description')->services('facebook', 'gplus', 'twitter','evernote','digg','delicious','linkedin','pinterest','reddit','scoopit','springpad','tumblr','twitter','viadeo','vk');
});