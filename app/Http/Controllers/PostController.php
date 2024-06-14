<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('frontend.post.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::where('id', $id)->first();

        return view('frontend.post.show', compact('post'));
    }
}
