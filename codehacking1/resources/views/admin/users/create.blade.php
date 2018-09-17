@extends('layouts.admin')

@section('content')

    <h1>Create User</h1>

    <div class="container">

        {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store']) !!}

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
                        {!! Form::submit('Create User', ['class'=>'btn btn-primary'])!!}
                    </div>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        {!! Form::close()!!}

    </div>

@stop