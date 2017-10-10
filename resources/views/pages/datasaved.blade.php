@extends('layouts.app')
    
@section('content')    
    <div class="jumbotron text-center">
        <h1>Your data:</h1>
        <p>Name:</p>
        <p>Province:</p>
        <p>Telephone:</p>
        <p>Salary:</p>
        <p><a class="btn btn-primary btn-lg" href="/login">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
 @endsection
