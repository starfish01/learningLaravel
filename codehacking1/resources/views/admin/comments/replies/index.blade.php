@extends('layouts.admin')

@section('content')

    @if( count($replies) > 0)

    <h1>Reply Comments from comments in - {{ $replies[0]->post->title }} - post</h1>


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



            @foreach($replies as $reply)
                <tr>
                    <td>{{ $reply->id }}</td>
                    <td><a href="{{ route(('home.post'), $reply->post->slug) }}" target="_blank"> {{ $reply->post->title }}</a> </td>
                    <td>{{ $reply->user->name }}</td>
                    <td> {{ $reply->body }}</td>
                    <td>{{ $reply->created_at->diffForHumans() }}</td>
                    <td>

                        {!! Form::open(['method'=>'PATCH', 'action'=>['CommentRepliesController@update', $reply->id]])!!}
                        @if($reply->is_active == 1)

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

                        {!! Form::open(['method'=>'DELETE', 'action'=>['CommentRepliesController@destroy',$reply->id]])!!}

                        <div class="form-group">
                            {!! Form::submit('Delete Comment', ['class'=>'btn btn-danger'])!!}
                        </div>

                        {!! Form::close()!!}

                    </td>
                </tr>

            @endforeach



        </tbody>
    </table>

       @else

        <h1>There are no reply comments from comments</h1>

    @endif
@stop