@extends('layouts.app')

@section('content')
  <h1>Posts</h1>
  @if(count($posts) > 0)
    @foreach($posts as $post)
      <div class="card card-body">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <img src="<?=url('/')?>/storage/cover_images/{{$post->cover_image}}" style="width:50%">
          </div>
          <div class="col-md-8 col-sm-8">
            <a href="<?=url('/')?>/posts/{{$post->id}}">
              <h3>{{$post->title}}</h3>
            </a>
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
          </div>

        </div>


      </div>
    @endforeach
    {{$posts->links()}}
  @else
    <p>No posts found!</p>
  @endif
@endsection
