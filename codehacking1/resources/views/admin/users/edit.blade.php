@extends('layouts.admin')

@section('content')

    <h1>Edit User - {{$user->name}}</h1>

    <div class="container">

        @include('includes.form-error')

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div>Current Image</div>
                    <img height="400" src="{{ $user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}">
                </div>
            </div>
        </div>

        {!! Form::model($user, (['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id],'files'=>true])) !!}

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('photo_id', 'Photo:') !!}
                    {!! Form::file('photo_id', null,['class'=>'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name',null, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::email('email',null, ['class'=>'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('role_id', 'Role Type:') !!}
                    {!! Form::select('role_id',[''=>'Choose An Option'] + $roles,null, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('status', 'Is the user Active?:') !!}
                    {!! Form::select('status',array(1=>'Active', 0=>'Inactive'), 0,['class'=>'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('password', 'Password:') !!}
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::submit('Edit User', ['class'=>'btn btn-primary'])!!}
            </div>
        </div>


        {!! Form::close()!!}

    </div>

@stop