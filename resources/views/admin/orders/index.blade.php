<x-app-layout>
    <div class="bg-white p-6 rounded shadow">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Zamówienia</h1>
        </div>

        {{-- TABELA --}}
        <table class="min-w-full border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-3 py-2">ID</th>
                    <th class="border px-3 py-2">Użytkownik</th>
                    <th class="border px-3 py-2">Kwota</th>
                    <th class="border px-3 py-2">Status</th>
                    <th class="border px-3 py-2">Data</th>
                </tr>
            </thead>

            <tbody>
                @forelse($orders as $order)
                    <tr class="hover:bg-gray-50">
         		<td class="border px-3 py-2">#{{ $order->id }}</td>
           		<td class="border px-3 py-2">{{ $order->user->email }}</td>
           		<td class="border px-3 py-2">{{ number_format($order->total_price, 2) }} zł</td>
            		<td class="border px-3 py-2">{{ strtoupper($order->status) }}</td>
            		<td class="border px-3 py-2">{{ $order->created_at->format('Y-m-d H:i') }}</td>
                    <td class="border px-3 py-2 space-x-2">
                            
                        {{--
                            <a href="{{ route('admin.orders.edit', $order) }}"
                            class="bg-yellow-400 px-3 py-1 rounded">
                                Edytuj
                            </a>
                        --}}

                        {{-- SZCZEGÓŁY – ADMIN + MODERATOR --}}
                        <a href="{{ route('admin.orders.show', $order) }}"
                        class="bg-blue-600 text-white px-3 py-1 rounded">
                            Szczegóły
                        </a>

                        {{-- USUŃ – TYLKO ADMIN --}}
                        @if(auth()->user()->role === 'admin')
                            <form method="POST"
                                action="{{ route('admin.orders.destroy', $order) }}"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-600 text-white px-3 py-1 rounded"
                                        onclick="return confirm('Usunąć zamówienie?')">
                                    Usuń
                                </button>
                            </form>
                        @endif
                    </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-6 text-gray-500">
                            Brak zamówień w bazie
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $orders->links() }}
    </div>
</x-app-layout>