@extends('layouts.master')


@section('content')
	<div class="container-fluid" id="sidebar">
	@include('blog.sidebar')
	</div>
	<!-- <div style="resize:vertical;overflow:auto;"></div> -->

	<div id="blog-main">
	@yield('blog')
	</div>


<!-- 

 -->
@endsection