@extends('layouts.app')

@section('content')


    <ul>

        @foreach($posts as $post)

            @if($post->path != '/images/')
                <div class="image-container">
                    <img height="50px" src="{{$post->path}}">
                </div>
            @endif

            <li><a href="{{route('posts.show', $post->id )}}">{{$post->title}}</a> <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Edit</a></li>

        @endforeach

    </ul>

    <a href="{{route('posts.create')}}" class="btn btn-primary">Create</a>



@stop

