@extends('layouts.app')
    
@section('content')    
    <h1>Edit User</h1>
    
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $post->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>

         <div class="form-group">
            {{Form::label('province', 'Province')}}
            {{Form::text('province', $post->province, ['class' => 'form-control', 'placeholder' => 'Only Provinces within Canada'])}}
        </div>

        <div class="form-group">
            {{Form::label('telephone', 'Telephone')}}
            {{Form::text('telephone', $post->telephone, ['class' => 'form-control', 'placeholder' => 'Telephone'])}}
        </div>

         <!-- <div class="form-group">
            {{Form::label('postalcode', 'PostalCode')}}
            {{Form::text('province', '', ['class' => 'form-control', 'placeholder' => 'Postal-Code'])}}
        </div>-->

            <div class="form-group">
            {{Form::label('salary', 'Salary')}}
            {{Form::text('salary', $post->salary, ['class' => 'form-control', 'placeholder' => 'Salary'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
 @endsection
