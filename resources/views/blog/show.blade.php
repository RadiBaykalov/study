@extends('blog.master')


@section('blog')
	<div class="container">
		<div id="post" class="rounded">
			<h1 class="display-4">{{ $post->title }}</h1>
			<p>
				by <a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a> on {{ $post->created_at->toDayDateTimeString() }}
				@if($post->user->id === Auth::id())
					<a class="btn btn-sm btn-primary" href="/blog/{{ $post->id }}/edit">Edit</a>
				@endif
			</p>
			<hr>
			<p class="lead">{{ $post->body }}</p>
		</div>
	</div>


	<div class="container">

		<ul class="list-group list-group-flush">
			@foreach($post->comments as $comment)
			<li class="list-group-item rounded-top p-2">
				<small><a href="/user/{{ $comment->user->id }}">{{ $comment->user->name }}</a> {{ $comment->created_at->diffForHumans() }}</small>
				<div class="lead">{{ $comment->body }}</div>
			</li>
			@endforeach

			<li class="list-group-item rounded-top py-4">
				@guest
				<span class="text-info"><a href="{{ route('login') }}">{{ __('Login') }}</a> or <a href="{{ route('register') }}">{{ __('Register') }}</a> to comment</span>
				@else
				<form method="POST" action="/blog/{{ $post->id }}/comments">
					{{ csrf_field() }}

					<div class="form-group">
						<label for="comment" class="sr-only">Leave a comment</label>
						<textarea id="comment" class="form-control" rows="2" name="body" placeholder="Leave a comment" required>{{ old('body') }}</textarea>
					</div>

					<button class="btn btn-primary" type="submit">Submit</button>
					@include('layouts.errors')
				</form>
				@endguest
			</li>
		</ul>

	</div>

@endsection

@push('styles')

<style type="text/css">
#post {
	background-color: #eee;
	padding: 1rem;
}
</style>
@endpush