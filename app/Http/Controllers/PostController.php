<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $data['title'] = $request->title;
        $data['details'] = $request->details;

        Post::create($data);

        return redirect()->route('post.create');
    }
}
