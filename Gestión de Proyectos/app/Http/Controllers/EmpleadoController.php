<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Proyecto;
use App\Departamento;

class EmpleadoController extends Controller
{
    public function verEmpleados(){
        $empleados = Empleado::all();
        return view('empleado/index')->with(['empleados' => $empleados]);
    }

    public function verEmpleado($id){
        $empleados = Empleado::where('id', '=', $id)->get();
        return view('empleado/show')->with(['empleados' => $empleados]);
    }

    public function verProyectos(){
        $proyectos = Proyecto::all();
        return view('proyectos/index')->with(['proyectos' => $proyectos]);
    }

    public function verDepartamentos(){
        $departamentos = Departamento::all();
        return view('departamentos/index')->with(['departamentos' => $departamentos]);
    }

    public function verDepartamento($id){
        $departamentos = Departamento::where('id', '=', $id)->get();
        return view('departamentos/show')->with(['departamentos' => $departamentos]);
    }
}
