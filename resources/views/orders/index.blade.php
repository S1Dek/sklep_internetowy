<x-app-layout>
    <h1 class="text-2xl font-bold mb-6">Moje zamówienia</h1>

    @if ($orders->isEmpty())
        <p>Nie masz jeszcze żadnych zamówień.</p>
    @else
        <table class="w-full border bg-white">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-3 py-2">ID</th>
                    <th class="border px-3 py-2">Kwota</th>
                    <th class="border px-3 py-2">Status</th>
                    <th class="border px-3 py-2">Data</th>
                    <th class="border px-3 py-2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td class="border px-3 py-2">#{{ $order->id }}</td>
                    <td class="border px-3 py-2">
                        {{ number_format($order->total_price, 2) }} zł
                    </td>
                    <td class="border px-3 py-2">
                        {{ strtoupper($order->status) }}
                    </td>
                    <td class="border px-3 py-2">
                        {{ $order->created_at->format('Y-m-d') }}
                    </td>
                    <td class="border px-3 py-2">
                        <a href="{{ route('orders.show', $order) }}"
                           class="text-blue-600">
                            Szczegóły
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</x-app-layout>
