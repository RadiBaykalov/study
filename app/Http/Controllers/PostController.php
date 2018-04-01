<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->only('create');
    }

    public function index() {
        $posts = Post::latest();
        if ($month = request('month')) {
            $posts->whereMonth('created_at', Carbon::parse('1 '.$month)->month);
        }
        if ($year = request('year')) {
            $posts->whereYear('created_at', $year);
        }
        $posts = $posts->get();
        // dd($posts);

        return view('blog.posts', compact('posts'));
    }

    public function show(Post $post) {
        return view('blog.show', compact('post'));
    }

    public function create() {
        return view('blog.create');
    }

    public function store() {
        $this->authorize('create', Post::class);
        $this->validate(request(), [
            'title' => 'required|min:3',
            'body' => 'required|min:20'
        ]);

        $post = Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => Auth::id()
        ]);

        session()->flash('flash-message', 'Post created');
        return redirect('/blog/' . $post->id);
    }

    public function edit(Post $post) {
        $this->authorize('update', $post);
        return view('blog.edit', compact('post'));
    }

    public function update(Request $request, Post $post) {
        $this->authorize('update', $post);
        $this->validate(request(), [
            'title' => 'required|min:3',
            'body' => 'required|min:20'
        ]);

        $post->update([
            'title' => request('title'),
            'body' => request('body')
        ]);
        session()->flash('flash-message', 'Post updated');
        return redirect('/blog/' . $post->id);
    }

    public function destroy(Post $post) {
        $this->authorize('delete', $post);
        $post->delete();
        session()->flash('flash-message', 'Post deleted');
        return redirect('/blog');
    }
}
