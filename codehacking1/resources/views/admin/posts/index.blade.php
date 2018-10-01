@extends('layouts.admin')

@section('content')

    <h1>Posts</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Photo</th>
            <th>Category</th>
            <th>Created By</th>
            <th>Visable</th>
            <th>Comments</th>
            <th>Updated</th>
            <th>Created</th>

        </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)

                <tr>
                    <td>{{$post->id}}</td>
                    <td><a href="{{ route(('home.post'), $post->slug ) }}" target="_blank"> {{$post->title }}</a> </td>
                    <td><img src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/50x50'}}" height="50px" alt=""></td>
                    <td>{{ $post->category ? $post->category['name'] : 'Uncategorised' }}</td>
                    <td>{{ $post->user['name'] }}</td>
                    <td></td>
                    <td> <a href="{{ route('comments.show', $post->id)}}">View Comments</a></td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td><a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a> </td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>

    <div class="row">
        <div class="col-sm-6 col-offset-5">

            {{$posts->render()}}

        </div>
    </div>


@stop