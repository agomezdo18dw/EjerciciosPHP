@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2><b>Empleados</b></h2>
  
    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Responsable de</th>
        <th>Departamento</th>
        <th>Colabora en</th>
        <th>Jefe de</th>
      </tr>
      @foreach($empleados as $empleado)
      <tr>
        <td><a href="{{route('empleado.show', $empleado->id)}}">{{$empleado->id}}</a></td>
        <td>{{$empleado->nombre}} {{$empleado->apellido}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
        @if(!is_null($empleado->proyecto))
          <td><a href="{{route('proyectos.show', $empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a></td>
        @else
          <td><span>Ninguno</span></td>
        @endif
        <td><a href="{{route('departamento.show', $empleado->departamento->id)}}">{{$empleado->departamento->nombre}}</a></td>
        @if(!is_null($empleado->proyectos))
          <td>
            @foreach($empleado->proyectos as $proyecto)
              <a href="{{route('proyectos.show', $proyecto->id)}}">{{$proyecto->nombre}}</a>,
            @endforeach
          </td>
        @else
          <td><span>Ninguno</span></td>
        @endif
        @if(!is_null($empleado->jefede))
          <td>
              <a href="{{route('departamento.show', $empleado->jefede->id)}}">{{$empleado->jefede->nombre}}</a>
          </td>
        @else
          <td><span>Ninguno</span></td>
        @endif
      </tr>
      @endforeach
    </table>

@endsection
