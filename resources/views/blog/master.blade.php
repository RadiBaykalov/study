@extends('layouts.master')


@section('content')

<div class="col-12 col-md-3 col-xl-2 py-2 py-md-3">
	@include('blog.sidebar')
</div>
<main class="col-12 col-md-9 col-xl-10 py-2 py-md-3">
	@yield('blog')
</main>

@endsection