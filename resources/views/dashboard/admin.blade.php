<x-app-layout>
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-3xl font-bold mb-6">Panel administratora</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            {{-- UŻYTKOWNICY --}}
            <a href="{{ route('admin.users.index') }}"
               class="block border rounded p-6 hover:shadow-lg transition
                      focus:outline-none focus:ring-2 focus:ring-blue-500">

                <h2 class="text-xl font-semibold mb-2">Użytkownicy</h2>
                <p class="text-gray-600">
                    Dodawanie, edycja oraz usuwanie kont użytkowników.
                </p>
            </a>

            {{-- PRODUKTY --}}
            <a href="{{ route('admin.products.index') }}"
               class="block border rounded p-6 hover:shadow-lg transition
                      focus:outline-none focus:ring-2 focus:ring-green-500">

                <h2 class="text-xl font-semibold mb-2">Produkty</h2>
                <p class="text-gray-600">
                    Dodawanie, edycja i usuwanie produktów ze sklepu.
                </p>
            </a>

        </div>
    </div>
</x-app-layout>
