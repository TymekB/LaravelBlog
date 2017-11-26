<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $posts = Post::latest()->paginate(3);

        return view('posts.index')->with('posts', $posts);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $commentsNumber = count($post->comments);
        $comments = $post->comments()->paginate(10);

        return view('posts.show', array('post' => $post, 'comments' => $comments, 'commentsNumber' => $commentsNumber));
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
        $post->user_id = Auth::user()->id;

        $post->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        if($post->user_id != Auth::user()->id)
        {
            return redirect('/');
        }

        return view('posts.edit')->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        if($post->user_id != Auth::user()->id)
        {
            return redirect('/');
        }

        $data = $request->validate([
            'title' => 'required|string|min:8',
            'body' => 'required|string|min:8'
        ]);

        $post->title = $data['title'];
        $post->body = $data['body'];

        $post->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if($post->user_id != Auth::user()->id)
        {
            return redirect('/');
        }

        $post->delete();

        return redirect('/');
    }
}
