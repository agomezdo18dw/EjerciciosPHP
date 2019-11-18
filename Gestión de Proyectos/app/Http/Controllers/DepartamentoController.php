<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class DepartamentoController extends Controller
{
    public function verDepartamentos(){
        $departamentos = Departamento::all();
        return view('departamentos/index')->with(['departamentos' => $departamentos]);
    }

    public function verDepartamento($id){
        $departamentos = Departamento::where('id', '=', $id)->get();
        return view('departamentos/show')->with(['departamentos' => $departamentos]);
    }
}
