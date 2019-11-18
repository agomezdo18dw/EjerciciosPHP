@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

    <h2><b>Insertar proyecto</b></h2>
    @foreach($proyectos as $proyecto)
        <form action="{{route('proyecto.edit', $proyecto->id)}}" method="get">
            <p>Nombre: <input type="text" name="nombre" placeholder="Esturi" value="{{$proyecto->nombre}}"></p>
            <p>Titulo: <input type="text" name="titulo" placeholder="Est" value="{{$proyecto->titulo}}"></p>
            <p>Fecha inicio: <input type="date" name="fechaIni" placeholder="2019-12-10" value="{{$proyecto->fechainicio}}"></p>
            <p>Fecha fin: <input type="date" name="fechaFin" placeholder="2019-12-20" value="{{$proyecto->fechafin}}"></p>
            <p>Horas estimadas: <input type="number" name="horas" placeholder="300" value="{{$proyecto->horasestimadas}}"></p>
            <p>Empleado respondable: {{$proyecto->empleado->nombre}} 
            <!-- ->
            <select name="responsable">
                @foreach($empleados as $empleado)
                    <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
                @endforeach
            </select>
            -->
            </p>
            <p>
                <input type="submit" value="Enviar">
                <input type="reset" value="Borrar">
            </p>
        </form>
    @endforeach
@endsection