<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class ProductController extends Controller
{
    public function index()
    {
        $products = products::all();
        return view('products.index', ['viewProducts' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'required',
        ]);

        $newProduct = products::create($data);
        return redirect()->route('products.index');
    }

    public function edit(products $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, products $product){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'required',
        ]);

        $product->update($data);
        return redirect(route('products.index'))->with('success','Product Update Successfully');
    }
}
