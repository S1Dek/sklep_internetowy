<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;



class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);

        if (empty($cart)) {
            return redirect()
                ->route('shop.index')
                ->with('error', 'Koszyk jest pusty');
        }

        return view('checkout.index', compact('cart'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:50',
            'address_line' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'city' => 'required|string|max:100',
            'notes' => 'nullable|string',
        ]);

        $cart = session('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index');
        }

        DB::transaction(function () use ($cart, $data) {

            foreach ($cart as $item) {
                $product = Product::lockForUpdate()->find($item['product_id']);

                if ($product->stock < $item['quantity']) {
                    throw new \Exception(
                        "Brak wystarczającej ilości produktu: {$product->name}"
                    );
                }
            }

            $order = Order::create([
                'user_id' => Auth::id(),
                'total_price' => collect($cart)->sum(
                    fn ($item) => $item['price'] * $item['quantity']
                ),
                'status' => 'przygotowane',

                'full_name' => $data['full_name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'address_line' => $data['address_line'],
                'postal_code' => $data['postal_code'],
                'city' => $data['city'],
                'notes' => $data['notes'],
            ]);

            foreach ($cart as $item) {
                $product = Product::lockForUpdate()->find($item['product_id']);

                $order->items()->create([
                    'product_id' => $product->id,
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                ]);

                $product->decrement('stock', $item['quantity']);
            }
        });

        session()->forget('cart');

        return redirect()
            ->route('orders.index')
            ->with('success', 'Zamówienie zostało złożone');
    }
}
