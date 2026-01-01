<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">
        Zamówienie #{{ $order->id }}
    </h1>

    <p>Status: <strong>{{ strtoupper($order->status) }}</strong></p>
    <p>Kwota: <strong>{{ number_format($order->total_price, 2) }} zł</strong></p>

    <h2 class="text-xl font-semibold mt-6 mb-2">Produkty</h2>

    <ul>
        @foreach ($order->items as $item)
            <li>
                {{ $item->product->name }}
                - {{ $item->quantity }} ×
                {{ number_format($item->price, 2) }} zł
            </li>
        @endforeach
    </ul>
</x-app-layout>
