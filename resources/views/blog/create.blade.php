@extends('blog.master')

@section('blog')

        <div class="d-">
                <div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div>

    </div>
        <div class="d-">
                <div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div>

    </div>
        <div class="d-">
                <div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div>

    </div>
        <div class="d-">
                <div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div>

    </div>
        <div class="d-">
                <div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div><div class="hexagon">
  <div class="hexTop"></div>
  <div class="hexBottom"></div>
</div>

    </div>

    <div class="container">
        <div class="card mt-md-4 mx-lg-4 mx-xl-5">
            <form class="p-4" method="POST" action="/blog">
                {{ csrf_field() }}
                <h4 class="">Create New Blog Post</h4>

                <div class="form-row">
                    <div class="form-group col">
                        <label for="post-title">Title</label>
                        <input type="text" id="post-title" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <label for="post-body">Content</label>
                        <textarea id="post-body" class="form-control" rows="4" name="body" required>{{ old('body') }}</textarea>
                    </div>
                </div>


                <button class="btn btn-primary" type="submit">Post</button>
                @include('layouts.errors')
            </form>
        </div>
    </div>

@endsection