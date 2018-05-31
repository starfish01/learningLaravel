@extends('layouts.app')

@section('content')

  <h1>{{$post->title}}</h1>

    <p>{{$post->content}}</p>

    <a href="{{route('posts.index')}}" class="btn btn-primary" >Click to go back</a>

  <a href="{{route('posts.edit', $post->id)}}" class="btn-primary btn">Edit</a>


@stop