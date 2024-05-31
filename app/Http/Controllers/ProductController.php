<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store()
    {
        $data = \request()->validate([
            'product_name' => 'string',
            'about_product' => 'string',
            'image' => 'string',
            'price' => 'decimal:2',
        ]);

        Product::create($data);
        return redirect()->route('product.index');
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Product $product)
    {
        $data = \request()->validate([
            'product_name' => 'string',
            'about_product' => 'string',
            'image' => 'string',
            'price' => 'decimal:2',
        ]);
        $product->update($data);
        return redirect()->route('product.show', $product->id);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
