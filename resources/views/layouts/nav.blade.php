<header class="navbar navbar-expand-sm navbar-dark bg-primary">
	<a class="navbar-brand" href="{{ action('HomeController@index') }}">CATAN</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-catan" aria-controls="navbar-catan" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>



	<div class="collapse navbar-collapse" id="navbar-catan">
		<!-- Left Side Of Navbar -->
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="#">Tournaments</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="{{ route('blog') }}">Blog</a>
			</li>
		</ul>

		<!-- Right Side Of Navbar -->
		<ul class="navbar-nav ml-auto">
			<!-- Authentication Links -->
			@guest
				<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
				<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
			@else
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('logout') }}"
							 onclick="event.preventDefault();
														 document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
						</form>
					</div>
				</li>
			@endguest
		</ul>
	</div>

</header>