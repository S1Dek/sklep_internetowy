<x-app-layout>

    <h1 class="text-2xl font-bold mb-6">
        Panel administratora
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <a href="{{ route('admin.users.index') }}"
           class="block p-6 bg-white rounded-lg shadow">
            <h2 class="text-xl font-semibold">Użytkownicy</h2>
        </a>

        <a href="{{ route('admin.products.index') }}"
           class="block p-6 bg-white rounded-lg shadow">
            <h2 class="text-xl font-semibold">Produkty</h2>
        </a>

        <a href="{{ route('admin.orders.index') }}"
           class="block p-6 bg-white rounded-lg shadow">
            <h2 class="text-xl font-semibold">Zamówienia</h2>
        </a>

    </div>

</x-app-layout>
