@extends('layouts.app')

@section('content')

  <div class="row">
    <!-- Post Content Column -->
    <div class="col-lg-8">
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
    
    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">
      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
            @foreach ($categories as $category)
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#">{{$category->name}}</a>
                </li>
              </ul>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
@endsection