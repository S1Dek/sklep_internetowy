<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">{{ $product->name }}</h1>
    <p class="mb-2">{{ $product->price }} zł</p>

    <form method="POST" action="{{ route('cart.add', $product) }}">
        @csrf
        <button class="bg-indigo-600 text-white px-6 py-2 rounded">
            Dodaj do koszyka
        </button>
    </form>
</x-app-layout>
