@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center mt-lg-3" >
        <h1>{{$title}}</h1>
        <p>Welcome to my Blog. You can share post and get latest gist out there</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
    
@endsection