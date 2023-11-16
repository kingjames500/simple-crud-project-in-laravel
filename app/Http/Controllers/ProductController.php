<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products'=> $products]);
    }

    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
    
        $data = $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:5',
            'qty' => 'required|integer',
            'price' => 'required|integer',
        ]);
        $product = Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function edit(Product $product){
      return view('products.edit', ['product'=> $product]);
    }
    public function update(Request $request, Product $product){
        $data = $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:2',
            'qty' => 'required|integer',
            'price' => 'required|integer',
        ]);

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function delete(Product $product){

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
    public function show(){
        return view('products.show');
    }
}
