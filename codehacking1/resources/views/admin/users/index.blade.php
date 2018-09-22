@extends('layouts.admin')

@section('content')

    <h1>Users</h1>

    <table class="table">
        <thead>
          <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Active</th>
              <th>Updated</th>
              <th>Created</th>

          </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)

                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role['name']}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Inactive'}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td><a href="" class="btn btn-primary">Edit</a> </td>
                    <td><a href="" class="btn btn-danger">Delete</a> </td>
                </tr>

            @endforeach

        @endif

        </tbody>
      </table>



@stop