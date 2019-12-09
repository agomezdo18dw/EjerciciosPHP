@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

@foreach($departamentos as $departamento)
    <h2><b>Departamento: </b>{{$departamento->nombre}}</h2>
    
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Empleados</th>
        </tr>
        <tr>
            <td>{{$departamento->id}}</td>
            <td>{{$departamento->nombre}}</td>
            <td>
                @foreach($departamento->empleados as $empleado)
                    <a href="{{route('empleado.show', $empleado->id)}}">{{$empleado->nombre}}</a>,  
                @endforeach
            </td>
        </tr>
    </table>
@endforeach

@endsection
