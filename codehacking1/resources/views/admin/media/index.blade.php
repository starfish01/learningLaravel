@extends('layouts.admin')

@section('content')

    <h1>Media</h1>

    <h1>Add Image</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminPhotoController@store', 'files'=>true])!!}

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title',null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary'])!!}
    </div>

    {!! Form::close()!!}

    <h1>Media List</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Path</th>
            <th>Image</th>
        </tr>
        </thead>
        <tbody>

        @if($photos)

            @foreach($photos as $photo)

                <tr>
                    <td>{{ $photo->id }}</td>
                    <td>{{ $photo->path }}</td>
                    <td><img src="{{$photo->file}}" height="100" /> </td>
                    <td>

                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPhotoController@destroy', $photo->id]])!!}

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



@stop
