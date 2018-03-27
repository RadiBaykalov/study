<nav class="list-group">
	<!-- <a class="navbar-brand" href="{{ route('blog') }}">Blog menu</a> -->
	<!-- <a class="list-group-item list-group-item-action" href="javascript:window.history.back()">Back</a> -->

	<a class="list-group-item list-group-item-action" href="{{ action('PostController@create') }}">New Post</a>
</nav>