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
    Route::get('post/top', 'Admin\PostController@top');
    Route::get('post/register', 'Admin\PostController@register');
    Route::post('post/register', 'Admin\PostController@register');
    Route::get('post/login', 'Admin\PostController@login');
    Route::get('post/enter', 'Admin\PostController@add');
    Route::post('post/enter', 'Admin\PostController@create');
    Route::get('post/profile', 'Admin\PostController@mypage');
    Route::post('post/profile', 'Admin\PostController@profile');
    Route::get('post/search', 'Admin\PostController@search');
    Route::get('post/detail', 'Admin\PostController@detail');
    Route::get('post', 'Admin\PostController@index');
    Route::get('post/edit', 'Admin\PostController@edit'); // 追記
    Route::post('post/edit', 'Admin\PostController@update'); // 追記
    Route::get('post/delete', 'Admin\PostController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
