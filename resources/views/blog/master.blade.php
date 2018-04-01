@extends('layouts.master')


@section('content')

<div class="col-12 col-md-3 col-lg-2">
	@include('blog.sidebar')
</div>
<main class="col-12 col-md-9 col-lg-10">
	@yield('blog')
</main>



<!-- 

 -->
@endsection