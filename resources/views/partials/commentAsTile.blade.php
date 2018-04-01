<div class="card col-12 col-sm-6 col-xl-4 py-1 px-sm-3 px-sm-1 px-lg-5 px-xl-3 border-0 bg-light">
	<div class="card-body p-2 border rounded border-info">
		<h5 class="card-title">{{ $comment->post->title }}</h5>
		<p class="card-text">{{ $comment->body }}</p>
		<a href="{{ action('PostController@show', [$id=$comment->post->id]) }}" class="btn btn-sm btn-info">Read more</a>
		<small class="card-text"><a href="/user/{{ $comment->post->user->id }}">{{ $comment->user->name }}</a> {{ $comment->created_at->diffForHumans() }}</small>
	</div>
</div>