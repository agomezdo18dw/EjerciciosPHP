@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

@foreach($departamentos as $departamento)
    <h2><b>Departamento: </b>{{$departamento->nombre}}</h2>
    
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
        </tr>
        <tr>
            <td>{{$departamento->departamento_id}}</td>
            <td>{{$departamento->nombre}}</td>
        </tr>
    </table>
@endforeach

@endsection
