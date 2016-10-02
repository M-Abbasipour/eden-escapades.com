<nav class="navbar navbar-default" role="navigation" id="nav-bar">
	<div class="container">
		<div class="navbar-header">
			<a href="{{ route('home') }}" class="navbar-brand">Eden Escapades</a>
		</div>
		
		<div class="collapse navbar-collapse">

			<ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('auth.signup') }}">Sign up</a></li>
                <li><a href="{{ route('auth.signin') }}">Sign in</a></li>
			</ul>

		</div>
	</div>
</nav>