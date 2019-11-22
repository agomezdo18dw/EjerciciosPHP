<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

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
}
