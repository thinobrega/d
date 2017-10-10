@extends('layouts.app')
    
@section('content')    
    <h1>Register</h1>
    
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>

        <div class="form-group">
            {{Form::label('telephone', 'Telephone')}}
            {{Form::text('telephone', '', ['class' => 'form-control', 'placeholder' => '"ex: (012)345-6789"'])}}
        </div>

            <div class="form-group">
            {{Form::label('salary', 'Salary')}}
            {{Form::text('salary', '', ['class' => 'form-control', 'placeholder' => 'Salary'])}}
        </div>
         <div class="form-group">
         
            {{Form::label('province', 'Province')}}
          <div id="province">  {{Form::select('province', ['Alberta' => 'Alberta', 'British Columbia' => 'British Columbia','Manitoba' => 'Manitoba','New Brunswick' => 'New Brunswick','Newfoundland and Labrador' => 'Newfoundland and Labrador','Nova Scotia' => 'Nova Scotia','Ontario' => 'Ontario','Prince Edward Island' => 'Prince Edward Island','Québec' => 'Québec','Saskatchewan' => 'Saskatchewan'], null) }}</id>
        </div>
        <hr>
        {{Form::submit('Submit',['class'=>'btn btn-primary pull-right'])}}
    {!! Form::close() !!}
 @endsection
