<nav class="navbar navbar-default" role="navigation" id="nav-bar">
	<div class="container">
		<div class="navbar-header">
			<a href="{{ route('home') }}" class="navbar-brand">Eden Escapades</a>
		</div>
		
		<div class="collapse navbar-collapse">

			<form action="{{ route('search.results') }}" role="search" class="navbar-form navbar-left">
				<div class="form-group">
					<input type="text" name="query" class="form-control" 
					placeholder="Find people"/>
				</div>
				<button type="submit" class="btn btn-default">Search</button>
			</form>

		</div>
	</div>
</nav>