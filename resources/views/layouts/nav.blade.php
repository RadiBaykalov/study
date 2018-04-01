<header class="navbar navbar-expand-sm navbar-dark bg-primary" id="nav-main">
	<a class="navbar-brand" href="{{ action('HomeController@index') }}">CATAN</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-catan" aria-controls="navbar-catan" aria-expanded="true" aria-label="Toggle navigation">
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
				<li>
					<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

<!-- maybe implement a dropdown login form
					<div class="dropdown show">
					  <a class="nav-link dropdown-toggle" href="{{ route('login') }}" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('Login') }}</a>
						<div class="dropdown-menu dropdown-menu-right">

						  <form class="px-4 py-3">
						    <div class="form-group">
						      <label for="exampleDropdownFormEmail1">Email address</label>
						      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
						    </div>
						    <div class="form-group">
						      <label for="exampleDropdownFormPassword1">Password</label>
						      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
						    </div>
						    <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="dropdownCheck">
						      <label class="form-check-label" for="dropdownCheck">
						        Remember me
						      </label>
						    </div>
						    <button type="submit" class="btn btn-primary">Sign in</button>
						  </form>
						  <div class="dropdown-divider"></div>
						  <a class="dropdown-item" href="#">New around here? Sign up</a>
						  <a class="dropdown-item" href="#">Forgot password?</a>

						</div>
					</div>
 -->
				</li>
				<li>
					<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>					
				</li>
			@else
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="/user/{{ Auth::user()->id }}">
								Profile
						</a>
						<a class="dropdown-item" href="{{ route('logout') }}"
							 onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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