@extends('blog.master')

@section ('blog')

<main class="container-fluid">
	<div class="row align-items-stretch">
		@each('partials.postAsTile', $posts, 'post')
	</div>
</main>

@endsection