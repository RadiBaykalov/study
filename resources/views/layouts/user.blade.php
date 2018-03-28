@extends('layouts.master')


@section('content')

<h1 class="p-3">{{ $user->name }}</h1>

@if(count($user->posts))
<div class="container-fluid mt-4">
	<h2>Posts</h2>
		<div class="d-flex align-content-stretch flex-wrap">
			@foreach($user->posts as $post)
				<div class="card bg-light post">
					<div class="card-body">
						<h5 class="card-title">{{ $post->title }}</h5>
						<p class="card-text">{{ substr($post->body, 0, 40) . (strlen($post->body) > 40 ? '...' : '') }}</p>
						<a href="{{ action('PostController@show', [$id=$post->id]) }}" class="btn btn-sm btn-info">Read more</a>
						<small class="card-text"><a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}</small>
					</div>
				</div>
			@endforeach
		</div>
</div>
@endif

@if(count($user->comments))
<div class="container-fluid mt-4">
	<h2>Comments</h2>
		<div class="d-flex align-content-stretch flex-wrap">
			@foreach($user->comments as $comment)
				<div class="card bg-light post">
					<div class="card-body">
						<h5 class="card-title">{{ $comment->post->title }}</h5>
						<p class="card-text">{{ $comment->body }}</p>
						<a href="{{ action('PostController@show', [$id=$comment->post->id]) }}" class="btn btn-sm btn-info">Read more</a>
						<small class="card-text"><a href="/user/{{ $comment->post->user->id }}">{{ $comment->user->name }}</a> {{ $comment->created_at->diffForHumans() }}</small>
					</div>
				</div>
			@endforeach
		</div>
</div>
@endif

@endsection