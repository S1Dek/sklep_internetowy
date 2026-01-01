<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        $total = collect($cart)->sum(fn ($item) => $item['price'] * $item['quantity']);

        return view('cart.index', compact('cart', 'total'));
    }

    public function add(Product $product)
    {
        $cart = session('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image_url' => $product->image_url,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function increase(Product $product)
    {
        $cart = session('cart', []);
        $cart[$product->id]['quantity']++;
        session()->put('cart', $cart);

        return back();
    }

    public function decrease(Product $product)
    {
        $cart = session('cart', []);

        if ($cart[$product->id]['quantity'] > 1) {
            $cart[$product->id]['quantity']--;
        }

        session()->put('cart', $cart);
        return back();
    }

    public function remove(Product $product)
    {
        $cart = session('cart', []);
        unset($cart[$product->id]);
        session()->put('cart', $cart);

        return back();
    }
}
