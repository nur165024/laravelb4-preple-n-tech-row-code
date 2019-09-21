<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $data['tests'] = DB::table('tests')->get();
        return view('test/index',$data);
    }
    public function create()
    {
        return view('test/create');
    }

    public function store(Request $request)
    {
        $data['title'] = $request->title;
        $data['email'] = $request->email;
        $data['details'] = $request->details;
        DB::table('tests')->insert($data);

        return redirect('test');
    }

    public function edit($id)
    {
        $data['test'] = DB::table('tests')->where('id', $id)->first();
        return view('test/edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data['title'] = $request->title;
        $data['email'] = $request->email;
        $data['details'] = $request->details;

        DB::table('tests')->where('id', $id)->update($data);

        return redirect('test');
    }

}
