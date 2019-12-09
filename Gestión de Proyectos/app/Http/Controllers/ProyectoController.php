<?php

namespace App\Http\Controllers;

use App\Proyecto;
use App\Empleado;
use Illuminate\Http\Request;

class proyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index')->with(['proyectos' => $proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleado::all();
        return view('proyectos.create')->with(['empleados' => $empleados]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'titulo' => 'required',
            'fechaIni' => 'required|date',
            'fechaFin' => 'required|date|after:fechaIni',
            'horas' => 'required|numeric',
            'responsable' => 'required|string'
        ]);

        $project = new Proyecto;
        $project->nombre = $request -> input('nombre');
        $project->titulo = $request -> input('titulo');
        $project->fechainicio = $request -> input('fechaIni');
        $project->fechafin = $request -> input('fechaFin');
        $project->horasestimadas = $request -> input('horas');
        $project->empleado_id = $request -> get('responsable');
        $project->save();

        return redirect(route('proyectos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyectos.show')->with(['proyecto' => $proyecto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        $empleados = Empleado::all();
        return view('proyectos.update')->with(['proyecto' => $proyecto, 'empleados' => $empleados]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'fechaIni' => 'required|date',
            'fechaFin' => 'required|date|after:fechaIni',
            'horas' => 'required|numeric',
            'responsable' => 'required|string'
        ]);
        
        $project = Proyecto::find($id);
        $project->nombre = $request -> input('nombre');
        $project->titulo = $request -> input('titulo');
        $project->fechainicio = $request -> input('fechaIni');
        $project->fechafin = $request -> input('fechaFin');
        $project->horasestimadas = $request -> input('horas');
        $project->empleado_id = $request -> get('responsable');
        $project->save();

        return redirect(route('proyectos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Proyecto::find($id);
        $project->delete();
        return redirect(route('proyectos.index'));
    }
}
