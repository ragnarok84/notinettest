<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('name','asc')->get();
        return view('products.index', compact('products'));
    }


    public function create()
    {
        return view('products.create');
    }

 
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:50',
                'price' => 'required|numeric',
                'description' => 'required|string|max:200'
            ]
        );

        $product = new Product;

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->back()->with('alert','Nuevo Producto Creado')->withInput();
    }

    public function show(Product $product)
    {
        //
    }

    public function edit (Product $product) {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate(
            [
                'name' => 'required|string|max:50',
                'price' => 'required|numeric',
                'description' => 'required|string|max:200'
            ]
        );

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->back()->with('alert','Producto Actualizado')->withInput();

    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}
