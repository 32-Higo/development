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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('post/top', 'Admin\PostController@add')->middleware('auth');
    Route::get('post/register', 'Admin\PostController@register');
    Route::post('post/register', 'Admin\PostController@register');
    Route::get('post/login', 'Admin\PostController@login');
    Route::get('post/enter', 'Admin\PostController@enter');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
