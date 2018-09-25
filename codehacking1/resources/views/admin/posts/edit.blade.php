@extends('layouts.admin')

@section('content')

    <h1>Edit Post - {{ $post->title }}</h1>

    <div class="container">

        @include('includes.form-error')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    @if ($post->photo_id)
                        <p>Current Image</p>
                        <img height="100" src="{{ $post->photo->file }}"/>
                    @endif
                </div>
            </div>
        </div>

        {!! Form::model($post, (['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id],'files'=>true])) !!}

        <div class="row">
            <div class="col-md-6">
                {!! Form::label('photo_id', 'Posts Image:') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>
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
            {!! Form::submit('Save Post', ['class'=>'btn btn-primary'])!!}
        </div>

        {!! Form::close()!!}


        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]])!!}

        <div class="form-group">
            {!! Form::submit('Delete Post', ['class'=>'btn btn-danger'])!!}
        </div>

        {!! Form::close()!!}

    </div>


@stop