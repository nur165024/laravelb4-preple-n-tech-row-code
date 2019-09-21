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

        return redirect('test/create');
    }
}
