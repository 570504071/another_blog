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

Route::get('/', 'PostsController@getIndex')->name('index');

Route::get('signup', 'UsersController@showSignupForm')->name('get_signup');

Route::post('signup', 'UserController@signup')->name('post_signup');

Route::get('login', 'UsersController@showLoginForm')->name('get_login');

Route::post('login', 'UsersController@login')->name('post_login');

Route::post('logout', 'UsersController@logout')->name('logout');

Route::get('add', 'PostsController@showAddForm')->name('get_add');

Route::post('add', 'PostsController@add')->name('post_add');
