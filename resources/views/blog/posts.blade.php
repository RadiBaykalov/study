@extends('blog.master')

@section ('blog')

<ul>
	@foreach ($posts as $post)
		<li><a href="{{ action('PostController@show', [$id=$post->id]) }}">{{$post->title}}</a></li>
	@endforeach
</ul>

@endsection