@extends('layouts.app')

@section('content')
<h1>Formulario insertar post</h1>
<form action="{{route('posts.store')}}" method="post">
    @include('posts._form')
</form>
@endsection