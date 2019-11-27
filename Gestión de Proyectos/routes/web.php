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

// Route::get('proyectos', 'ProyectoController@index')->name('proyectos.index');
// Route::get('proyectos/create', 'ProyectoController@create')->name('proyectos.create');
// Route::post('proyectos', 'ProyectoController@store')->name('proyectos.store');
// Route::get('proyecto/{id}', 'ProyectoController@show')->name('proyectos.show');
// Route::get('proyecto/{id}/edit', 'ProyectoController@edit')->name('proyectos.edit');
// Route::put('proyectos/{id}', 'ProyectoController@update')->name('proyecto.update');
// Route::delete('proyectos/{id}', 'ProyectoController@destroy')->name('proyecto.destroy');

Route::resource('proyectos');

Route::get('departamentos', 'DepartamentoController@verDepartamentos')->name('departamentos.index');
Route::get('departamento/{id}', 'DepartamentoController@verDepartamento')->name('departamento.show');
