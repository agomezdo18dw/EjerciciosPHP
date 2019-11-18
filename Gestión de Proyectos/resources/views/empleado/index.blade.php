@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Proyecto</th>
      </tr>
      @foreach($empleados as $empleado)
      <tr>
        <td><a href="{{route('empleado.show', $empleado->id)}}">{{$empleado->id}}</a></td>
        <td>{{$empleado->nombre}} {{$empleado->apellido}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
        @if(!is_null($empleado->proyecto))
          <td>{{$empleado->proyecto->nombre}}</td>
        @endif
      </tr>
      @endforeach
    </table>

@endsection
