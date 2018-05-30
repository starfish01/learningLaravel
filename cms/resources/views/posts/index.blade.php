@extends('layouts.app')

@section('content')


    <ul>

        @foreach($posts as $post)

            <li><a href="{{route('posts.show', $post->id )}}">{{$post->title}}</a> <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Edit</a></li>

        @endforeach

    </ul>



@stop

