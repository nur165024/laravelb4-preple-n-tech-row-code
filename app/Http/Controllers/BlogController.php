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
        return redirect('blog');
    }

    public function edit($id)
    {
        $data['blog'] = Blog::findOrFail($id);
        return view('blog/edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data['name'] = $request->name;
        $data['details'] = $request->details;
        Blog::findOrFail($id)->update($data);

        return redirect('blog');
    }

    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect('blog');
    }
}
