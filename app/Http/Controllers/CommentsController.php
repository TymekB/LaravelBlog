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

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);

        return view('comments.edit')->with('comment', $comment);
    }

    public function update(Request $request, $commentId)
    {
        $data = $request->validate([
            'body' => 'required|min:8|max:255|string'
        ]);

        $comment = Comment::findOrFail($commentId);

        $comment->body = $data['body'];

        $comment->save();

        return redirect('/home');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        $comment->delete();

        return redirect()->back();
    }
}
