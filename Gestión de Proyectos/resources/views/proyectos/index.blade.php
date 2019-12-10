@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2><b>Proyectos</b></h2>
<a href="{{route('proyectos.create')}}">Insertar</a>
<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Titulo</th>
    <th>Fecha Inicio</th>
    <th>Fecha fin</th>
    <th>Horas estimadas</th>
    <th>Responsable</th>
    <th>Empleados</th>
  </tr>
  @foreach($proyectos as $proyecto)
  <tr>
    <td><a href="{{route('proyectos.show', $proyecto->id)}}">{{$proyecto->id}}</a></td>
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
    <td>
      <form action="{{route('proyectos.edit', $proyecto->id)}}" method="get">
        @csrf
        <input type="submit" value="Editar">
      </form>
    </td>
    <td>
      <form action="{{route('proyectos.destroy', $proyecto->id)}}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" value="Eliminar">
      </form>
    </td>
  </tr>
  @endforeach
</table>
@endsection