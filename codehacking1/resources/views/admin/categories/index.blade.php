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
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>


@stop