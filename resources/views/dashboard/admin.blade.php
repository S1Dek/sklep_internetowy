<x-app-layout>
    <h1 class="text-2xl font-bold mb-6">
        {{ auth()->user()->role === 'admin' ? 'Panel Administratora' : 'Panel Moderatora' }}
    </h1>

    <div class="grid grid-cols-3 gap-6">

        {{-- USERS – TYLKO ADMIN --}}
        @if(auth()->user()->role === 'admin')
            <a href="{{ route('admin.users.index') }}"
               class="block p-6 bg-white rounded shadow">
                <h2 class="text-xl font-semibold">Użytkownicy</h2>
            </a>
        @endif

        {{-- PRODUCTS – ADMIN + MODERATOR --}}
        <a href="{{ route('admin.products.index') }}"
           class="block p-6 bg-white rounded shadow">
            <h2 class="text-xl font-semibold">Produkty</h2>
        </a>

        {{-- ORDERS – ADMIN + MODERATOR --}}
        <a href="{{ route('admin.orders.index') }}"
           class="block p-6 bg-white rounded shadow">
            <h2 class="text-xl font-semibold">Zamówienia</h2>
        </a>

    </div>
</x-app-layout>
