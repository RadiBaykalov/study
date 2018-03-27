<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['store', 'create']]);
    }

    public function index() {
        $posts = Post::all();

        return view('blog.posts', compact('posts'));
    }

    public function show(Post $post) {
        return view('blog.show', compact('post'));
    }

    public function create() {
        return view('blog.create');
    }

    public function store() {
        $this->validate(request(), [
            'title' => 'required|min:3',
            'body' => 'required|min:20'
        ]);

        $post = Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => Auth::id()
        ]);

        return redirect('/blog/' . $post->id);
    }
}
