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

Route::group(['middleware' => 'auth'], function() {
    Route::get('post/enter', 'PostController@add');
    Route::post('post/enter', 'PostController@create');
    Route::get('profile/edit', 'ProfileController@edit');
    Route::post('post/profile', 'ProfileController@mypage');
    Route::post('post/profile', 'PostController@profile');
    Route::get('post/detail', 'PostController@detail');
    Route::get('post/edit', 'PostController@edit'); 
    Route::post('post/edit', 'PostController@update'); 
    Route::get('post/delete', 'PostController@delete');
    Route::get('post/', 'PostController@delete');
});

Auth::routes();
    Route::get('post/top', 'PostController@top');
    Route::post('post/login', 'PostController@login');
    Route::post('post/register', 'PostController@register');
    Route::get('post/register', 'PostController@register');
    Route::get('post/search', 'PostController@search');
    Route::get('post', 'PostController@index');
    Route::get('post/show', 'PostController@show');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PostController@top');
