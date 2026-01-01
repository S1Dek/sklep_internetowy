<x-app-layout>
    <h1 class="text-2xl font-bold mb-6">Koszyk</h1>

    @if (empty($cart))
        <p>Koszyk jest pusty.</p>
    @else
        <table class="w-full bg-white rounded shadow">
            <thead>
                <tr class="border-b">
                    <th class="p-3 text-left">Produkt</th>
                    <th>Cena</th>
                    <th>Ilość</th>
                    <th>Suma</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $item)
                <tr class="border-b">
                    <td class="p-3 flex items-center gap-4">
                        <img src="{{ $item['image_url'] }}"
                            class="w-16 h-16 object-cover rounded">
                        <span>{{ $item['name'] }}</span>
                    </td>

                    <td>{{ number_format($item['price'], 2) }} zł</td>

                    <td>
                        <div class="flex items-center gap-2">
                            <form method="POST" action="{{ route('cart.decrease', $item['product_id']) }}">
                                @csrf
                                <button class="px-2 bg-gray-200">−</button>
                            </form>

                            <span>{{ $item['quantity'] }}</span>

                            <form method="POST" action="{{ route('cart.increase', $item['product_id']) }}">
                                @csrf
                                <button class="px-2 bg-gray-200">+</button>
                            </form>
                        </div>
                    </td>

                    <td>
                        {{ number_format($item['price'] * $item['quantity'], 2) }} zł
                    </td>

                    <td>
                        <form method="POST" action="{{ route('cart.remove', $item['product_id']) }}">
                            @csrf
                            <button class="text-red-600">Usuń</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if (!empty($cart))
            <div class="mt-6 flex justify-between items-center">
                <div class="text-xl font-bold">
                    Razem: {{ number_format($total, 2) }} zł
                </div>
                <a href="{{ route('checkout.index') }}"
                class="bg-gray-200 hover:bg-gray-300 text-black
                        px-6 py-3 rounded-lg font-semibold">
                    Przejdź do płatności
                </a>
            </div>
        @endif
    @endif
</x-app-layout>
