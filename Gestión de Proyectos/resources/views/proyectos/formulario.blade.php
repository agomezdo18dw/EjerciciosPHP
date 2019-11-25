@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

    <h2><b>Insertar proyecto</b></h2>

    <form action="{{route('insertarPro')}}" method="get">
        <p>Nombre: <input type="text" name="nombre" placeholder="Esturi" value="{{old('nombre')}}">
        @if ($errors->has('nombre'))
            <label class="error">
                {{$errors->first('nombre')}}
            </label>
        @endif
        </p>
        <p>Titulo: <input type="text" name="titulo" placeholder="Est" value="{{old('titulo')}}">
        @if ($errors->has('titulo'))
            <label class="error">
                {{$errors->first('titulo')}}
            </label>
        @endif
        </p>
        <p>Fecha inicio: <input type="date" name="fechaIni" value="yyyy-mm-dd" placeholder="2019-12-10" value="{{old('fechaIni')}}">
        @if ($errors->has('fechaIni'))
            <label class="error">
                {{$errors->first('fechaIni')}}
            </label>
        @endif
        </p>
        <p>Fecha fin: <input type="date" name="fechaFin" value="yyyy-mm-dd" placeholder="2019-12-20" value="{{old('fechaFin')}}">
        @if ($errors->has('fechaFin'))
            <label class="error">
                {{$errors->first('fechaFin')}}
            </label>
        @endif
        </p>
        <p>Horas estimadas: <input type="number" name="horas" placeholder="300" value="{{old('horas')}}">
        @if ($errors->has('horas'))
            <label class="error">
                {{$errors->first('horas')}}
            </label>
        @endif
        </p>
        <p>Empleado respondable: 
        <select name="responsable"> 
            @foreach($empleados as $empleado)
                @if(old('responsable') == $empleado->id)
                    <option value="{{$empleado->id}}" selected>{{$empleado->nombre}} {{$empleado->apellido}}</option>
                @else 
                    <option value="{{$empleado->id}}">{{$empleado->nombre}} {{$empleado->apellido}}</option>
                @endif
            @endforeach
        </select>
        @if ($errors->has('responsable'))
            <label class="error">
                {{$errors->first('responsable')}}
            </label>
        @endif
        </p>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </p>
    </form>
@endsection