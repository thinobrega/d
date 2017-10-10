<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/app2.css')}}">
        <title>{{config('app.name','TBN')}}</title>  
    </head>
    <body>
        @include('includes.navbar')
        <div class="container">
        @include('includes.messages')
           @yield('content')
        </div>
    </body>
</html>
 