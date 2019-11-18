@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

    <h2><b>Insertar proyecto</b></h2>

    <form action="{{route('insertarPro')}}" method="get">
        <p>Nombre: <input type="text" name="nombre" placeholder="Esturi"></p>
        <p>Titulo: <input type="text" name="titulo" placeholder="Est"></p>
        <p>Fecha inicio: <input type="date" name="fechaIni" value="yyyy-mm-dd" placeholder="2019-12-10"></p>
        <p>Fecha fin: <input type="date" name="fechaFin" value="yyyy-mm-dd" placeholder="2019-12-20"></p>
        <p>Horas estimadas: <input type="number" name="horas" placeholder="300"></p>
        <p>Empleado respondable: 
        <select name="responsable">
            @foreach($empleados as $empleado)
                <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
            @endforeach
        </select>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </p>
    </form>
@endsection