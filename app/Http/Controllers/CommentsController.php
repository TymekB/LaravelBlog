<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request, $postId)
    {
        $post = Post::findOrFail($postId);

        $data = $request->validate([
           'body' => 'required|min:8|max:255|string'
        ]);

        $comment = new Comment();

        $comment->body = $data['body'];
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $post->id;

        $comment->save();

        return redirect()->back();
    }
}
