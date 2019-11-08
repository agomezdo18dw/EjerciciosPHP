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
//--------Tarea 4.1--------
Route::get('contacto', function () {
    return view('4-1/contacto');
})->name('contacto');

Route::get('blog/{id}', function ($id) {
    return view('4-1/blog', ['id'=>$id]);
})->name('blog');

Route::get('blog2/{id}/{nombre}', function ($id, $nombre) {
    return view('4-1/blog2', ['id'=>$id, 'nombre'=>$nombre]);
})->where(array('nombre'=>'[a-zA-Z]+','id'=>'[0-9]+'))->name('blog2');
//------Fin tarea 4.1------

//--------Tarea 4.2--------
Route::get('saludo', 'SaludoController@saludo')->name('saludo');
Route::get('saludoConNombre/{nombre}', 'SaludoController@saludoConNombre')->name('saludoConNombre');
Route::get('saludoColor/{nombre}/{color?}', 'SaludoController@saludoColor')->name('saludoColor');
//------Fin tarea 4.2------

//--------Tarea 4.3--------
Route::get('formulario', 'formularioController@mostrarForm')->name('formulario');
Route::get('mostrarDatos', 'formularioController@mostrarDatos')->name('mostrarDatos');
Route::get('formularioIdiomas', 'formularioController@mostrarFormIdiomas')->name('formularioIdiomas');
Route::post('mostrarDatos2', 'formularioController@mostrarDatos2')->name('mostrarDatos2');
//------Fin tarea 4.3------

//--------Tarea 4.4--------
Route::get('validacion', 'validacionController@mostrarFormulario')->name('validacion');
Route::get('val', 'validacionController@validacion')->name('val');
Route::get('validacion2', 'validacionController@mostrarFormulario2')->name('validacion2');
Route::get('val2', 'validacionController@validacion2')->name('val2');
Route::get('validaciondni', 'validacionController@mostrarFormulariodni')->name('validaciondni');
Route::get('valdni', 'validacionController@validaciondni')->name('valdni');
//------Fin tarea 4.4------