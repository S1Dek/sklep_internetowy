<x-app-layout>
    <div class="bg-white p-6 rounded shadow">

        {{-- NAGŁÓWEK + PRZYCISK --}}
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Produkty</h1>

            <a href="{{ route('admin.products.create') }}" class="btn">
                + Dodaj produkt
            </a>
        </div>

        {{-- TABELA --}}
        <table class="min-w-full border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-3 py-2">ID</th>
                    <th class="border px-3 py-2">Nazwa</th>
                    <th class="border px-3 py-2">Cena</th>
                    <th class="border px-3 py-2">Stan</th>
                    <th class="border px-3 py-2">Akcje</th>
                </tr>
            </thead>

            <tbody>
                @forelse($products as $product)
                    <tr class="hover:bg-gray-50">
                        <td class="border px-3 py-2">{{ $product->id }}</td>
                        <td class="border px-3 py-2">{{ $product->name }}</td>
                        <td class="border px-3 py-2">{{ $product->price }} zł</td>
                        <td class="border px-3 py-2">{{ $product->stock }}</td>
                        <td class="border px-3 py-2 space-x-2">

                            {{-- EDYTUJ / USUŃ – TYLKO ADMIN --}}
                            @if(auth()->user()->role === 'admin')
                                <a href="{{ route('admin.products.edit', $product) }}"
                                class="bg-yellow-400 px-3 py-1 rounded">
                                    Edytuj
                                </a>

                                <form method="POST"
                                    action="{{ route('admin.products.destroy', $product) }}"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-600 text-white px-3 py-1 rounded"
                                            onclick="return confirm('Usunąć produkt?')">
                                        Usuń
                                    </button>
                                </form>
                            @endif

                            {{-- SZCZEGÓŁY – ADMIN + MODERATOR --}}
                            <a href="{{ route('admin.products.show', $product) }}"
                            class="bg-blue-600 text-white px-3 py-1 rounded">
                                Szczegóły
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-6 text-gray-500">
                            Brak produktów w bazie
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</x-app-layout>
