<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('shop.index', [
            'products' => Product::where('stock', '>', 0)->get()
        ]);
    }

    public function show(Product $product)
    {
        return view('shop.show', compact('product'));
    }
}
