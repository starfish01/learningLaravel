@extends('layouts.app')

@section('content')

    <h1>Create</h1>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  {!! Form::open(['method'=>'POST','action'=>'PostsController@store', 'files' => true]) !!}


      <div class="form-group">
          {!! Form::label('title', 'Post Name') !!}
          {!! Form::text('title', null, ['class'=>'form-control']) !!}
      </div>

    <div class="form-group">
        {!! Form::file('file',['class'=>'form-control']) !!}
    </div>

      <div class="form-group">
          {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
      </div>
      {{--<div class="form-group">--}}
          {{--{!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}--}}
      {{--</div>--}}
  {!!  Form::close() !!}

    {{--<form method="post" action="/posts">--}}
        {{--<input type="text" name="title" placeholder="Enter Title">--}}
        {{--<input type="submit" name="submit">--}}
    {{--</form>--}}

@stop
