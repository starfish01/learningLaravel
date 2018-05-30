@extends('layouts.app')

@section('content')

    <form method="post" action="/posts">

        <input type="text" name="title" placeholder="Enter Title">

        {{csrf_field()}}

        <input type="submit" name="submit">

    </form>

@stop
