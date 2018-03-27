<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['store']]);
    }
    public function store(Post $post)
    {
        $this->validate(request(), [
            'body' => 'required|min:3'
        ]);

        Comment::create([
            'body' => request('body'),
            'post_id' => $post->id,
            'user_id' => Auth::id()
        ]);

        return back();
    }
}
