<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Colegio SFA')</title>
        
    </head>
    <body>
        
        @yield('content')
        
        
        <ul>
        	<li><a href="/public/">Home</a></li>
        	<li><a href="/public/about">about</a></li>
        	<li><a href="/public/contact">Contact</a></li>
        </ul>
    </body>
</html>