@extends('layouts.admin')

@section('content')

    <h1>Create Post</h1>

    <div class="container">

        @include('includes.form-error')

    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store','files'=>true])!!}

        <div class="form-group">
            {!! Form::label('photo_id', 'Posts Image:') !!}
            {!! Form::file('photo_id', null,['class'=>'form-control']) !!}
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title',null, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('category_id', 'Please select a category:') !!}
                    {!! Form::select('category_id',[''=>'Choose An Option'] + $categories ,null,['class'=>'form-control']) !!}
                </div>
            </div>
        </div>

    <div class="form-group">
        {!! Form::label('body', 'Posts Body:') !!}
        {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary'])!!}
    </div>

    {!! Form::close()!!}

    </div>


@stop