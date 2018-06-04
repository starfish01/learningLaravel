@extends('layouts.app')

@section('content')

    <h1>Edit {{$post->title}}</h1>

    {!! Form::model($post, ['method'=>'PATCH','action'=>['PostsController@update', $post->id]]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Post Name') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
    {!!  Form::close() !!}

    <br>

    {!! Form::model($post, ['method'=>'DELETE', 'action'=>['PostsController@destroy', $post->id]]) !!}
        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}


    {{--<form method="post" action="/posts/{{$post->id}}">--}}

        {{--<input type="hidden" name="_method" value="DELETE">--}}

        {{--{{csrf_field()}}--}}

        {{--<input type="submit" value="Delete" class="btn-danger btn">--}}

    {{--</form>--}}

    {{--{!! Form::open(['method'=>'DELETE', 'action'=>'PostsController@destroy']) !!}--}}

        {{--{!! Form::submit('Delete', ['class'=>'btn btn-primary']) !!}--}}

    {{--{!! Form::close() !!}--}}



    {{--{!! Form::open(['method'=>'POST','action'=>'PostsController@store']) !!}--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::label('title', 'Post Name') !!}--}}
        {{--{!! Form::text('title', null, ['class'=>'form-control']) !!}--}}

    {{--</div>--}}

    {{--{!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}--}}

    {{--<input type="text" name="title" placeholder="Enter Title">--}}

    {{--<input type="submit" name="submit">--}}

    {{--{!!  Form::close() !!}--}}

    {{--<form method="post" action="/posts/{{$post->id}}">--}}

    {{--<input type="hidden" name="_method" value="PUT">--}}

    {{--{{csrf_field()}}--}}

    {{--<input type="text" name="title" value="{{$post->title}}">--}}


    {{--<input type="submit" name="submit" value="Update">--}}

    {{--</form>--}}


@stop