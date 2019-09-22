<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::orderBy('id', 'desc')->get();
        return view('product.index', $data);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $data['product_name'] = $request->product_name;
        $data['product_count'] = $request->product_count;
        $data['product_details'] = $request->product_details;

        Product::create($data);

        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $data['product'] = Product::findOrFail($id);
        return view('product.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data['product_name'] = $request->product_name;
        $data['product_count'] = $request->product_count;
        $data['product_details'] = $request->product_details;

        Product::findOrFail($id)->update($data);

        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('product.index');
    }

}
