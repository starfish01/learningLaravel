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
            <th>Updated</th>
            <th>Created</th>

        </tr>
        </thead>
        <tbody>

        {{--@if($posts)--}}

            {{--@foreach($posts as $post)--}}

                {{--<tr>--}}
                    {{--<td>{{  }}</td>--}}
                    {{--<td>{{  }}</td>--}}
                    {{----}}
                    {{--<td>{{$post->updated_at->diffForHumans()}}</td>--}}
                    {{--<td>{{$post->created_at->diffForHumans()}}</td>--}}
                    {{--<td><a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a> </td>--}}
                {{--</tr>--}}

            {{--@endforeach--}}

        {{--@endif--}}

        </tbody>
    </table>


@stop