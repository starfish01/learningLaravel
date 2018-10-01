@extends('layouts.admin')

@section('content')

    <h1>Comments</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Post Title</th>
            <th>Poster</th>
            <th>Body Of Comment</th>
            <th>Date Added</th>

        </tr>
        </thead>
        <tbody>

        @if($comments)

            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td><a href="{{ route(('home.post'), $comment->post->slug) }}" target="_blank"> {{$comment->post->title }}</a> </td>
                    <td>{{ $comment->user->name }}</td>
                    <td> {{ $comment->body }}</td>
                    <td>{{ $comment->created_at->diffForHumans() }}</td>
                    <td>

                        {!! Form::open(['method'=>'PATCH', 'action'=>['PostCommentsController@update', $comment->id]])!!}
                            @if($comment->is_active == 1)

                                <input type="hidden" name="is_active" value="0">

                                <div class="form-group">
                                    {!! Form::submit('Hide Post', ['class'=>'btn btn-primary'])!!}
                                </div>

                            @else

                                <input type="hidden" name="is_active" value="1">

                                <div class="form-group">
                                    {!! Form::submit('Show Post', ['class'=>'btn btn-primary'])!!}
                                </div>

                            @endif
                        {!! Form::close()!!}

                    </td>
                    <td>

                        {!! Form::open(['method'=>'DELETE', 'action'=>['PostCommentsController@destroy',$comment->id]])!!}

                        <div class="form-group">
                            {!! Form::submit('Delete Comment', ['class'=>'btn btn-danger'])!!}
                        </div>

                        {!! Form::close()!!}

                    </td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>




@stop