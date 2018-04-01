<nav class="navbar navbar-expand-md navbar-info px-0" id="blog-menu">



	<div class="row justify-content-center w-100 mx-0">


		@if(Auth::check())
		<div class="nav-group col mb-1">

			<a class="btn btn-light" href="{{ action('PostController@create') }}">New Post</a>
			<!-- <a class="list-group-item list-group-item-action" href="javascript:window.history.back()">Back</a> -->

		</div>
		@endif

		<div class="w-100"></div>

		<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#blog-menu" aria-controls="blog-menu" aria-expanded="true" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button> -->

		<div class="nav-group col-6 col-sm-3 col-md-12 mb-md-0 mb-1">


				<button class="navbar-toggler btn btn-light w-100 px-1" type="button" data-toggle="collapse" data-target=".blog-collapse" aria-controls="blog-archives" aria-expanded="true" aria-label="Toggle navigation">Archive</button>
				<h5 class="d-md-block d-none mt-2 mb-1">Archive</h5>
				
				<div class="collapse navbar-collapse blog-collapse" id="blog-archives">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link p-1" href="{{ route('blog') }}">All posts</a>
						</li>
						@foreach($archives as $archive)
						<li class="nav-item">
							<a class="nav-link p-1" href="/blog/?month={{ $archive->month }}&year={{ $archive->year }}">{{ $archive->month . ' ' . $archive->year }}</a>
						</li>
						@endforeach
					</ul>
				</div>

		</div>


		<div class="nav-group col-6 col-sm-3 col-md-12 mb-md-0 mb-1">

				<button class="navbar-toggler btn btn-light w-100 px-1" type="button" data-toggle="collapse" data-target=".blog-collapse" aria-controls="blog-tags" aria-expanded="true" aria-label="Toggle navigation">Tags</button>
				<h5 class="d-md-block d-none mt-2 mb-1">Tags</h5>
				
				<div class="collapse navbar-collapse blog-collapse" id="blog-tags">
					<ul class="nav flex-column">
						@foreach($tags as $tag)
						<li class="nav-item">
							<a class="nav-link p-1" href="/blog/tags/{{ $tag }}">{{ $tag }}</a>
						</li>
						@endforeach
					</ul>
				</div>

		</div>
		<div class="nav-group col-6 col-sm-3 col-md-12 mb-md-0 mb-1">


				<button class="navbar-toggler btn btn-light w-100 px-1" type="button" data-toggle="collapse" data-target=".blog-collapse" aria-controls="blog-archives" aria-expanded="true" aria-label="Toggle navigation">Archive</button>
				<h5 class="d-md-block d-none mt-2 mb-1">Archive</h5>
				
				<div class="collapse navbar-collapse blog-collapse" id="blog-archives">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link p-1" href="{{ route('blog') }}">All posts</a>
						</li>
						@foreach($archives as $archive)
						<li class="nav-item">
							<a class="nav-link p-1" href="/blog/?month={{ $archive->month }}&year={{ $archive->year }}">{{ $archive->month . ' ' . $archive->year }}</a>
						</li>
						@endforeach
					</ul>
				</div>

		</div>


		<div class="nav-group col-6 col-sm-3 col-md-12 mb-md-0 mb-1">

				<button class="navbar-toggler btn btn-light w-100 px-1" type="button" data-toggle="collapse" data-target=".blog-collapse" aria-controls="blog-tags" aria-expanded="true" aria-label="Toggle navigation">Tags</button>
				<h5 class="d-md-block d-none mt-2 mb-1">Tags</h5>
				
				<div class="collapse navbar-collapse blog-collapse" id="blog-tags">
					<ul class="nav flex-column">
						@foreach($tags as $tag)
						<li class="nav-item">
							<a class="nav-link p-1" href="/blog/tags/{{ $tag }}">{{ $tag }}</a>
						</li>
						@endforeach
					</ul>
				</div>

		</div>

	</div>



</nav>