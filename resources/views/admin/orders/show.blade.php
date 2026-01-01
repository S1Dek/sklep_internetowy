<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">
        Zamówienie #{{ $order->id }}
    </h1>

    <div class="mb-4">
        <p><strong>Klient:</strong> {{ $order->user->email }}</p>
        <p><strong>Status:</strong> {{ strtoupper($order->status) }}</p>
        <p><strong>Kwota:</strong> {{ number_format($order->total_price, 2) }} zł</p>
        <p><strong>Data:</strong> {{ $order->created_at->format('Y-m-d H:i') }}</p>
    </div>

    <h2 class="text-xl font-semibold mb-2">Produkty</h2>

    <table class="w-full border">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-3 py-2">Produkt</th>
                <th class="border px-3 py-2">Cena</th>
                <th class="border px-3 py-2">Ilość</th>
                <th class="border px-3 py-2">Suma</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $item)
            <tr>
                <td class="border px-3 py-2">{{ $item->product->name }}</td>
                <td class="border px-3 py-2">{{ number_format($item->price, 2) }} zł</td>
                <td class="border px-3 py-2">{{ $item->quantity }}</td>
                <td class="border px-3 py-2">
                    {{ number_format($item->price * $item->quantity, 2) }} zł
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
