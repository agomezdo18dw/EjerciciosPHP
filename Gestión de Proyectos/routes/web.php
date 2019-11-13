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
    return view('home');
})->name('home');

Route::get('empleado', 'EmpleadoController@verEmpleados')->name('empleado');

Route::get('proyectos', 'EmpleadoController@verProyectos')->name('proyectos');

Route::get('empleados', 'EmpleadoController@verDepartamentos')->name('departamentos');