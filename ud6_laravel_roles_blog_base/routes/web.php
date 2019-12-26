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

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::resource('posts','PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');
//Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/editor', 'EditorController@index')->name('editor');

Route::put('/role/{id}', 'AdminController@changeRol')->name('changeRol');