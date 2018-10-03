@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_user'))
        <p>{{session('deleted_user')}}</p>
    @endif

    <h1>Users</h1>

    <table class="table">
        <thead>
          <tr>
              <th>Id</th>
              <th>Photo</th>
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
                    <td><img src="{{ $user->photo ? $user->photo->file : 'http://placehold.it/50x50'}}" height="50px" alt=""></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role['name']}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Inactive'}}</td>
                    <td>{{$user->updated ? $user->updated_at->diffForHumans() : 'NO DATA'}}</td>
                    <td>{{$user->created_at ? $user->created_at->diffForHumans() : 'NO DATA'}}</td>
                    <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a> </td>
                </tr>

            @endforeach

        @endif

        </tbody>
      </table>



@stop