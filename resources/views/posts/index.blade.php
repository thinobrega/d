@extends('layouts.app')

@section('content')
    <h3>Users</h3>
 
    @if(count($posts)>1)
        @foreach($posts as $post)



 
 <nav class="navbar navbar-light bg-light" style="background-color: #e3f2fd;">
    <div class="container">
            <div id="navbar" class="collapse navbar-collapse">
                <a href="/posts/{{$post->id}}">
                    <ul class="nav navbar-nav">
                        <li>Name: {{$post->name}}</li></br>
                        <li>Province: {{$post->province}}</li></br>
                        <li>telephone: {{$post->telephone}}</li></br>
                        <li>Salary: {{$post->salary}}</li>
                    </ul>
                </a> 
            </div>
        </div>      
    </nav>
   
     <hr>   
    
       
        @endforeach
        {{$posts->links()}}

    @else
        <p>No users found</p>
    @endif

@endsection