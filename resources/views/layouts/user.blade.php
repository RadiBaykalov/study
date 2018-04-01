@extends('layouts.master')


@section('content')
<div class="col-12">

<h1 class="pl-3 py-4">{{ $user->name }}</h1>


@if(count($user->posts))
<h2 class="p-3">Posts</h2>
<div class="container-fluid">
	<div class="row align-items-stretch">
		@each('partials.postAsTile', $user->posts, 'post', 'empty')
	</div>
</div>
@endif

@if(count($user->comments))
<h2 class="p-3">Comments</h2>
<div class="container-fluid">
	<div class="row align-items-stretch">
		@each('partials.commentAsTile', $user->comments, 'comment', 'empty')
	</div>
</div>
@endif

</div>
@endsection