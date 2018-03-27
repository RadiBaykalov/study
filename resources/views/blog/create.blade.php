@extends('blog.master')

@section('blog')

    <form class="px-3" method="POST" action="/blog">
        {{ csrf_field() }}
        <h1 class="h3 mb-3 font-weight-normal">Create New Blog Post</h1>

        <div class="form-group">
            <label for="post-title">Title</label>
            <input type="text" id="post-title" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="post-body">Content</label>
            <textarea id="post-body" class="form-control" rows="4" name="body" required>{{ old('body') }}</textarea>
        </div>

        <button class="btn btn-primary" type="submit">Post</button>
        @include('layouts.errors')
    </form>

@endsection