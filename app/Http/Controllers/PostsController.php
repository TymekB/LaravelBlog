<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index')->with('posts', $posts);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show')->with('post', $post);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|min:8',
            'body' => 'required|string|min:8'
        ]);

        $post = new Post();

        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->user_id = 1;

        $post->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect('/');
    }
}
