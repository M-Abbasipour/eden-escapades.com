<!--<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
         Brand and toggle get grouped for better mobile display
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">Eden Escapades</a>
        </div>

         Collect the nav links, forms, and other content for toggling 
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('auth.signup') }}">Sign Up <span class="sr-only">(current)</span></a></li>
                <li><a href="{{ route('auth.signin') }}">Sign In</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse 
    </div>
    <!-- /.container-fluid 
</nav>-->

<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="nav-bar">
    <div class="container-fluid">
        <span class="pull-right">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img class="pull-right" alt="Brand" id="logo-img" src="{{ URL::asset('assets/img/logo.png') }}">
            </a>
        </span>
        <div id="small-menu">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('auth.signup') }}"><h4>SIGN UP</h4></a></li>
                <li><a href="{{ route('auth.signin') }}"><h4>SIGN IN</h4></a></li>
            </ul>
        </div>
    </div>
</nav>