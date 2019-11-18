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

Route::get('proyectos', 'ProyectoController@verProyectos')->name('proyectos.index');
Route::get('proyecto/{id}', 'ProyectoController@verProyecto')->name('proyecto.show');
Route::get('formularioProyecto', 'ProyectoController@formularioInsertar')->name('formInsertarPro');
Route::get('insertarProyecto', 'ProyectoController@insertar')->name('insertarPro');


Route::get('departamentos', 'DepartamentoController@verDepartamentos')->name('departamentos.index');
Route::get('departamento/{id}', 'DepartamentoController@verDepartamento')->name('departamento.show');
