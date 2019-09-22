<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data['posts'] = Post::orderBy('id', 'desc')->get();
        return view('post.index', $data);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $data['title'] = $request->title;
        $data['details'] = $request->details;

        Post::create($data);

        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $data['post'] = Post::findOrFail($id);
        return view('post/edit', $data)
    }

}
