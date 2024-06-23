<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function user_comments_destroy($id)
    {
        $comment = Comment::where([
            ['user_id', '=', Auth::user()->id],
            ['id', '=', $id]
        ])->first();

        $comment->delete();

        toastr()->success('Comment deleted successfully!');
        return redirect()->back();
    }
}
