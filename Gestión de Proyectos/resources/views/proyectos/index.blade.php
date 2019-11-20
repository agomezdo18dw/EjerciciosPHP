@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2><b>Proyectos</b></h2>
  <a href="{{route('formInsertarPro')}}">Insertar</a>
    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
        <th>Responsable</th>
      </tr>
      @foreach($proyectos as $proyecto)
        <tr>
          <td><a href="{{route('proyecto.show', $proyecto->proyecto_id)}}">{{$proyecto->proyecto_id}}</a></td>
          <td>{{$proyecto->nombre}}</td>
          <td>{{$proyecto->titulo}}</td>
          <td>{{$proyecto->fechainicio}}</td>
          <td>{{$proyecto->fechafin}}</td>
          <td>{{$proyecto->horasestimadas}}</td>
          @if(!is_null($proyecto->empleado))
          <td><a href="{{route('empleado.show', $proyecto->empleado->empleado_id)}}">{{$proyecto->empleado->nombre}}</a></td>
          <td><a href="{{route('formEditar', $proyecto->proyecto_id)}}">Editar</a></td>
          <td><a href="{{route('proyecto.delete', $proyecto->proyecto_id)}}">Eliminar</a></td>
          @endif
        </tr>
      @endforeach
    </table>
@endsection
