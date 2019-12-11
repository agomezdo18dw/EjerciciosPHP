@extends('layouts.app')

@section('content')

<div class="row">
  <!-- Post Content Column -->
  <div class="col-lg-12">
    @foreach($posts as $post)
      <!-- Title -->
      <h1 class="mt-4">{{$post->title}}</h1>
      <!-- Author -->
      <p class="lead">
        by
        <a href="{{$post->user->id}}">{{$post->user->name}}</a>
      </p>
      <hr>
      <!-- Date/Time -->
      <p>Posted on {{$post->published_at}}</p>
      <hr>
      <!-- Preview Image -->
      @if($post->image)
        <img class="img-fluid rounded" src="{{$post->image}}" alt="">
        <hr>
      @endif
        <!-- Post Content -->
        <p class="lead">{{$post->excerpt}}</p>
        <p>{{$post->body}}</p>
        <hr>
    @endforeach
  </div>
</div>
<!-- /.row -->
@endsection