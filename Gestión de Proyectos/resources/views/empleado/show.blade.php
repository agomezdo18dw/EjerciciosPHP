@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

@foreach($empleados as $empleado)
  <h2><b>Empleado: </b>{{$empleado->nombre}} {{$empleado->apellido}}</h2>
  
    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Proyecto</th>
      </tr>
      <tr>
        <td>{{$empleado->empleado_id}}</td>
        <td>{{$empleado->nombre}} {{$empleado->apellido}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
        @if(!is_null($empleado->proyecto))
          <td><a href="{{route('proyecto.show', $empleado->proyecto->proyecto_id)}}">{{$empleado->proyecto->nombre}}</a></td>
        @endif
      </tr>
    </table>
@endforeach

@endsection
