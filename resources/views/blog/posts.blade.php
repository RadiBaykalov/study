@extends('blog.master')

@section ('blog')

	<div class="d-flex align-content-stretch flex-wrap">
		@foreach($posts as $post)
			<div class="card bg-light post">
				<div class="card-body">
					<h5 class="card-title">{{ $post->title }}</h5>
					<p class="card-text">{{ substr($post->body, 0, 30) . (strlen($post->body) > 30 ? '...' : '') }}</p>
					<a href="{{ action('PostController@show', [$id=$post->id]) }}" class="btn btn-sm btn-info">Read more</a>
					<small class="card-text"><a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}</small>
				</div>
			</div>
		@endforeach
	</div>


@endsection