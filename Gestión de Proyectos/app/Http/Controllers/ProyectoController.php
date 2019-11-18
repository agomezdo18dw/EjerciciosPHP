<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;

class ProyectoController extends Controller
{
    public function verProyectos(){
        $proyectos = Proyecto::all();
        return view('proyectos/index')->with(['proyectos' => $proyectos]);
    }
    
    public function verProyecto($id){
        $proyectos = Proyecto::where('id', '=', $id)->get();
        return view('proyectos/show')->with(['proyectos' => $proyectos]);
    }
}
