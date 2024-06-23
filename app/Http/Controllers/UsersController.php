<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function user_posts()
    {
        $posts = Post::where('user_id', '=', Auth::user()->id)->paginate(9);
        return view('users.posts', compact('posts'));
    }

    public function user_comments()
    {
        $user = User::where('id', '=', Auth::user()->id)->first();
        $comments = $user->Comments;

        return view('users.comments', compact('comments'));
    }

    public function user_liked_posts()
    {
        $user = User::where('id', '=', Auth::user()->id)->first();
        $posts = $user->postlikes()->paginate(9);

        return view('users.liked_posts', compact('posts'));
    }
}
