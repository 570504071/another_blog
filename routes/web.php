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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PostsController@getIndex')->name('index');

Route::get('/admin', 'PostsController@getAdmin')->name('admin_area');

Route::post('/add', 'PostsController@postAdd')->name('add_new_post');

Route::post('/login', 'UsersController@postLogin')->name('login');

Route::get('/logout', 'UsersController@getLogout')->name('logout');
