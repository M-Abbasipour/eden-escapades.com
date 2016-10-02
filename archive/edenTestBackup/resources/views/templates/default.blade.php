<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

    </head>

    <body>
           
        @if(Auth::check())
            @include('templates.partials.nav-signedin')
            @include('templates.partials.profile-bar')
        @else 
             @include('templates.partials.nav')
        @endif
        <div class="container">
            @include('templates.partials.alerts')
            @yield('content')
        </div>
    </body>

</html>