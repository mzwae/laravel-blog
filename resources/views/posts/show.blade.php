@extends('layouts.app')

@section('content')
  <a href="<?=url('/')?>/posts" class="btn btn-primary">Go Back</a>
  <h1>{{$post->title}}</h1>
  <small>Written on {{$post->created_at}}</small>
  <hr>
  <div>
    {!!$post->body!!}
  </div>
  <hr>
  <a href="<?=url('/')?>/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
@endsection
