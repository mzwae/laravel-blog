@extends('layouts.app')

@section('content')
  <a href="<?=url('/')?>/posts" class="btn btn-primary">Go Back</a>
  <br>
  <br>
  <h1>{{$post->title}}</h1>
  <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
  <img src="<?=url('/')?>/storage/cover_images/{{$post->cover_image}}" style="width:100%">

  <hr>
  <div>
    {!!$post->body!!}
  </div>
  <hr>
  @if (!Auth::guest() && (Auth::user()->id == $post->user_id))
    <a href="<?=url('/')?>/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'class'=>'float-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
  @endif

@endsection
