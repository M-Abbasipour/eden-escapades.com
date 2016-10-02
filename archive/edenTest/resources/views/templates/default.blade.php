<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src={{ URL::asset( 'assets/js/script.js') }}></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/simple-sidebar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
</head>

<body>
    
    <body data-grid-framework="b3f" data-grid-color="blue" data-grid-opacity="0.5" data-grid-zindex="10" data-grid-gutterwidth="30px" data-grid-nbcols="16">
<!--
Framework codes: b3 (Bootstrap 3 fixed), b3f (Bootstrap 3 fluid), bo (Bootstrap 2 fixed), bf (Bootstrap 2 fluid), f4 (Foundation 4 & 5), f3 (Foundation 3), f2 (Foundation 2).
Note 1: 'Gutter width' parameter only applies to gutterless grid systems (Bootstrap 3, Foundation 4 & 5).
Note 2: 'Nb cols' parameter for Bootstrap only.
-->
    

    @if(Auth::check()) @include('templates.partials.nav-header') @include('templates.partials.nav-sidebarMenu') @else @include('templates.partials.nav-signin') @endif
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">

            @include('templates.partials.alerts') @yield('content')

        </div>
    </div>
    <!-- /#page-content-wrapper -->

</body>
    
<footer>
    @if(Auth::check()) @include('templates.partials.footer-signin') @else @include('templates.partials.footer') @endif
</footer>
    
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

</script>

</html>
