@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')


<h2><b>Proyecto: </b>{{$proyecto->nombre}}</h2>

<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
        <th>Empleado responsable</th>
        <th>Empleados</th>
    </tr>
    <tr>
        <td>{{$proyecto->id}}</td>
        <td>{{$proyecto->nombre}}</td>
        <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->fechainicio}}</td>
        <td>{{$proyecto->fechafin}}</td>
        <td>{{$proyecto->horasestimadas}}</td>
        <td><a href="{{route('empleado.show', $proyecto->empleado->id)}}">{{$proyecto->empleado->nombre}}</a></td>
        <td>
            @foreach($proyecto->empleados as $empleado)
                <a href="{{route('empleado.show', $empleado->id)}}">{{$empleado->nombre}}</a>,
            @endforeach
        </td>
    </tr>
</table>


@endsection