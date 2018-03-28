<nav class="list-group">
	<!-- <a class="navbar-brand" href="{{ route('blog') }}">Blog menu</a> -->
	<!-- <a class="list-group-item list-group-item-action" href="javascript:window.history.back()">Back</a> -->

	<a class="list-group-item list-group-item-action" href="{{ action('PostController@create') }}">New Post</a>


	<h5 class="mt-3">Archives</h5>
	<ul class="list-unstyled">
		<li>
			<a class="nav-link p-1" href="{{ route('blog') }}">All posts</a>
		</li>
		@foreach($archives as $archive)
		<li>
			<a class="nav-link p-1" href="/blog/?month={{ $archive->month }}&year={{ $archive->year }}">{{ $archive->month . ' ' . $archive->year }}</a>
		</li>
		@endforeach
	</ul>
</nav>