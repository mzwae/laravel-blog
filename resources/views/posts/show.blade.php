@extends('layouts.app')

@section('content')
  <a href="http://127.0.0.1:8080/laravel-blog/public/posts" class="btn btn-primary">Go Back</a>
  <h1>{{$post->title}}</h1>
  <small>Written on {{$post->created_at}}</small>
  <div>
    {{$post->body}}
  </div>
@endsection
