@extends('layouts.admin')

@section('content')


        <h1>Edit a Category</h1>


        <div class="col-md-6">
            {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoryController@update', $category->id]])!!}

            <div class="form-group">
                {!! Form::label('name', 'Category:') !!}
                {!! Form::text('name',null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Category', ['class'=>'btn btn-primary'])!!}
            </div>

            {!! Form::close()!!}
        </div>
        <div class="col-md-6"></div>



@stop