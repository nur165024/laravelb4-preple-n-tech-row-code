<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::get();
        return view('blog/index', $data);
    }

    public function create()
    {
        return view('blog/create');
    }

    public function store(Request $request)
    {
        $data['name'] = $request->name;
        $data['details'] = $request->details;
        Blog::create($data);
        return redirect('blog/create');
    }
}
