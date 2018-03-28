@extends('blog.master')

@section('blog')

	<form class="px-3" method="POST" action="/blog/{{ $post->id }}">
		@method('PUT')
		{{ csrf_field() }}
		<h1 class="h3 mb-3 font-weight-normal">Edit Blog Post</h1>

		<div class="form-group">
			<label for="post-title">Title</label>
			<input type="text" id="post-title" class="form-control" name="title" value="{{ old('title', $post->title) }}" required autofocus>
		</div>

		<div class="form-group">
			<label for="post-body">Content</label>
			<textarea id="post-body" class="form-control" rows="8" name="body" required>{{ old('body', $post->body) }}</textarea>
		</div>

		<button class="btn btn-primary" type="submit">Post</button>
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-delete-post">Delete</button>

		@include('layouts.errors')
	</form>


	<!-- Modal -->
	<div class="modal fade" id="modal-delete-post" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalLongTitle">Confirm deletion</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Are you sure you want to delete this post?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<a href="{{ action('PostController@destroy', [$post->id]) }}"  class="btn btn-danger"
						onclick="event.preventDefault(); document.getElementById('delete-post').submit();">Delete</a>
				</div>
			</div>
		</div>
	</div>
	<form id="delete-post" action="{{ action('PostController@destroy', ['post' => $post]) }}" method="POST"
		style="display: none;">
			@method('DELETE')
			@csrf
	</form>

@endsection