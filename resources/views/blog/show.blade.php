@extends('blog.master')


@section('blog')
	<h2 class="display-4">{{ $post->title }}</h2>
	<small>by {{ $post->user->name }} on {{ $post->created_at->toDayDateTimeString() }}</small>
	<p class="mt-3 lead">{{ $post->body }}</p>


	<div class="comments">
		<ul class="list-group">
			@foreach($post->comments as $comment)
				<li class="list-group-item p-2 d-flex">
					<div>{{ $comment->body }}</div>
					<div class="ml-auto">
						<small>
							{{ $comment->user->name }}
							<br />
							{{ $comment->created_at->diffForHumans() }}
						</small>
					</div>
				</li>

			@endforeach
			<li class="list-group-item">
				<form method="POST" action="/blog/{{ $post->id }}/comments">
					{{ csrf_field() }}

			        <div class="form-group">
			            <label for="comment" class="sr-only">Leave a comment</label>
			            <textarea id="comment" class="form-control" rows="2" name="body" placeholder="Leave a comment" required>{{ old('body') }}</textarea>
			        </div>

        			<button class="btn btn-primary" type="submit">Submit</button>
        			@include('layouts.errors')
				</form>
			</li>
		</ul>


	</div>

@endsection