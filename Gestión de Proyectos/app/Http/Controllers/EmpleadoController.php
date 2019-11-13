<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empleado;
use App\proyectos;
use App\departamentos;

class EmpleadoController extends Controller
{
    public function verEmpleados(){
        $empleados = empleado::all();
        return view('empleado/index')->with(['empleados' => $empleados]);
    }

    public function verProyectos(){
        $proyectos = proyectos::all();
        return view('proyectos/index')->with(['proyectos' => $proyectos]);
    }

    public function verDepartamentos(){
        $departamentos = departamentos::all();
        return view('departamentos/index')->with(['departamentos' => $departamentos]);
    }
}
