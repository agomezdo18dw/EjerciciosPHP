<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Empleado;

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

    public function formularioInsertar(){
        $empleados = Empleado::all();
        return view('proyectos/formulario')->with(['empleados' => $empleados]);
    }
    
    public function insertar(Request $request){

        $request->validate([
            'nombre' => 'required',
            'titulo' => 'required',
            'fechaIni' => 'required|date',
            'fechaFin' => 'required|date|after:fechaIni',
            'horas' => 'required|numeric',
            'responsable' => 'required|string'
        ]);

        $nombre = $request -> input('nombre');
        $titulo = $request -> input('titulo');
        $fechaIni = $request -> input('fechaIni');
        $fechaFin = $request -> input('fechaFin');
        $horas = $request -> input('horas');
        $responsable = $request -> get('responsable');

        Proyecto::insert([
            'nombre' => $nombre,
            'titulo' => $titulo,
            'fechainicio' => $fechaIni,
            'fechafin' => $fechaFin,
            'horasestimadas' => $horas,
            'empleadoRes' => $responsable
        ]);

        $proyectos = Proyecto::all();
        return view('proyectos/index')->with(['proyectos' => $proyectos]);
    }

    public function formularioEditar($id){
        $proyectos = Proyecto::where('id', '=', $id)->get();
        $empleados = Empleado::all();
        return view('proyectos/formEditar')->with(['proyectos' => $proyectos, 'empleados' => $empleados]);
    }

    public function editar($id, Request $request){

        $request->validate([
            'titulo' => 'required',
            'fechaIni' => 'required|date',
            'fechaFin' => 'required|date|after:fechaIni',
            'horas' => 'required|numeric',
            'responsable' => 'required|string'
        ]);

        $titulo = $request -> input('titulo');
        $fechaIni = $request -> input('fechaIni');
        $fechaFin = $request -> input('fechaFin');
        $horas = $request -> input('horas');
        $responsable = $request -> get('responsable');

        Proyecto::where('id', '=', $id)->update([
            'titulo' => $titulo,
            'fechainicio' => $fechaIni,
            'fechafin' => $fechaFin,
            'horasestimadas' => $horas,
            'empleadoRes' =>  $responsable
        ]);

        $proyectos = Proyecto::all();
        return view('proyectos/index')->with(['proyectos' => $proyectos]);
    }

    public function eliminar($id){
        Proyecto::where('id', '=', $id)->delete();
        $proyectos = Proyecto::all();
        return view('proyectos/index')->with(['proyectos' => $proyectos]);
    }
}
