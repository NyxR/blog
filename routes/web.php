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
    return view('index');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('about', ['as' => 'about', 'uses' => 'PagesController@about']);
Route::get('signin', ['as' => 'signin', 'uses' => 'PagesController@signin']);
Route::get('admin', ['as' => 'admin', 'uses' => 'PagesController@admin']);

Route::resource('link', 'LinksController', ['only' => ['create', 'store']]);
Route::get('r/{link}', ['as' => 'link.show', 'uses' => 'LinksController@show'])->where('link', '[0-9]+');

