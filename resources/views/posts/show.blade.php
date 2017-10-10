@extends('layouts.app')

@section('content')
    <h1>User's Info</h1>
    <hr>
    <h3>Name: {{$post->name}}</h3>
    <h3>Province: {{$post->province}}</h3>
    <h3>Telephone: {{$post->telephone}}</h3>
    <h3>Salary: {{$post->salary}}</h3>
     <small>Written on {{$post->created_at}}</small>
    <hr>
   
   
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default  pull-right">Edit</a> <p class="  pull-right">&nbsp&nbsp&nbsp </p>





    
    {!!Form::open(['action' =>['PostsController@destroy', $post->id],'method' =>'POST', 'class' => 'pull-right'])!!}
    
    {{Form::hidden('_method', 'DELETE')}}
    
    {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
    
    {!!Form::close()!!}
     <a href="/posts" class="btn btn-default">Go Back</a>
    
@endsection