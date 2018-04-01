<div class="card col-12 col-sm-6 col-xl-4 py-1 px-sm-3 px-md-1 px-lg-5 px-xl-3 border-0 bg-light">

	<div class="card-body p-2 shadow-dynamic" style="">

		<h5 class="card-title">

			<a href="{{ action('PostController@show', [$id=$post->id]) }}" class="">{{ $post->title }}</a>

		</h5>

		<p class="card-text">{{ substr($post->body, 0, 30) . (strlen($post->body) > 30 ? '...' : '') }}</p>

		

		<small class="card-text">
			<a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a>
			{{ $post->created_at->diffForHumans() }}

			<br>
			@if (count($post->tags))
				@foreach($post->tags as $tag)
					<a class="tag btn btn-xs btn-info" href="/blog/tags/{{$tag->name}}">{{$tag->name}}</a>
				@endforeach
			@endif
		</small>

	</div>

</div>