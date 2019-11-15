@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
    @foreach($departamentos as $departamento)
    <tr>
      <td><a href="departamento/{{$departamento->id}}">{{$departamento->id}}</a></td>
      <td>{{$departamento->nombre}}</td>
    </tr>
    @endforeach
  </table>

@endsection