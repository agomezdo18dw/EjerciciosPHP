@extends('layouts.app')

@section('content')
<h1>Formulario editar post</h1>
<form action="{{route('posts.update', $post->id)}}" method="post">
    @method('PUT')
    @include('posts._form')
</form>
@endsection