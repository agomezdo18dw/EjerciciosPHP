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
})->name('/');

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('blog/{id}', function ($id) {
    return view('blog', ['id'=>$id]);
})->name('blog');

Route::get('blog2/{id}/{nombre}', function ($id, $nombre) {
    return view('blog2', ['id'=>$id, 'nombre'=>$nombre]);
})->where(array('nombre'=>'[a-zA-Z]+','id'=>'[0-9]+'))->name('blog2');

Route::get('saludo', 'SaludoController@saludo')->name('saludo');

Route::get('saludoConNombre/{nombre}', 'SaludoController@saludoConNombre')->name('saludoConNombre');

Route::get('saludoColor/{nombre}/{color?}', 'SaludoController@saludoColor')->name('saludoColor');