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

Route::get('empleados', 'EmpleadoController@verEmpleados')->name('empleados.index');
Route::get('empleado/{id}', 'EmpleadoController@verEmpleado')->name('empleado.show');

Route::get('proyectos', 'EmpleadoController@verProyectos')->name('proyectos.index');

Route::get('departamentos', 'EmpleadoController@verDepartamentos')->name('departamentos.index');