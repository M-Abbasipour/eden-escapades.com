<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="nav-bar">
    <div class="container-fluid">
        <span class="pull-right">
            <a href="{{ route('dashboard.index') }}" class="navbar-brand">
                <img class="pull-right" alt="Brand" id="logo-img" src="{{ URL::asset('assets/img/logo.png') }}">
            </a>
        </span>
        <div class="navbar-header">
            <span class="pull-left">
                <a href="#menu-toggle" id="menu-toggle">
                    <div id="menu-icon">
                      <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </div>
                </a>
            </span>
        </div>
    </div>
</nav>
