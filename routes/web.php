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

Route::get('/home', function () {
    return view('show');
});
Route::get('create', function () {
    return view('create');
});
Auth::routes();

Route::get('/home', 'PostController@index')->name('home');
Route::get('show', 'PostController@show')->name('home');
Route::get('delete/{id}', 'PostController@destroy')->name('home');
Route::get('edit/{id}', 'PostController@edit')->name('home');
Route::post('update/{id}', 'PostController@update')->name('update.post');
Route::post('create', 'PostController@create')->name('home');