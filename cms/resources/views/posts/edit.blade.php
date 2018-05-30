@extends('layouts.app')

@section('content')

    <h1>Edit {{$post->title}}</h1>

    <form method="post" action="/posts/{{$post->id}}">

        <input type="hidden" name="_method" value="PUT">

        {{csrf_field()}}

        <input type="text" name="title" value="{{$post->title}}">


        <input type="submit" name="submit">

    </form>

    <br>
    <a href="{{route('posts.index')}}" class="btn btn-primary">Return to Index</a>


@stop