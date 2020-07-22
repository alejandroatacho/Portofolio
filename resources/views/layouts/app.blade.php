<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{config('app.name', 'Portfolio')}}</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    </head>
    
    <body>
        @include ('navbar.navbarmain')
 

        @yield('content')
     

        @include ('navbar.footer')
    </body>

</html>
