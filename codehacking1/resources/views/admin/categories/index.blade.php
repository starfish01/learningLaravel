@extends('layouts.admin')

@section('content')

    <h1>Categories</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>

        @if($categories)

            @foreach($categories as $category)

                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td><a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>

                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoryController@destroy', $category->id]])!!}

                        <div class="form-group">
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger'])!!}
                        </div>

                        {!! Form::close()!!}

                    </td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>

    <div class="row">

        <h1>Create a new Category</h1>


        <div class="col-md-6">
            {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoryController@store'])!!}

            <div class="form-group">
                {!! Form::label('name', 'Category:') !!}
                {!! Form::text('name',null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Post', ['class'=>'btn btn-primary'])!!}
            </div>

            {!! Form::close()!!}
        </div>
        <div class="col-md-6"></div>
    </div>



@stop