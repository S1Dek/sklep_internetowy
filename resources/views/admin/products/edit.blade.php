<x-app-layout>
    <div class="bg-white p-6 rounded shadow max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edytuj produkt</h1>

        <form method="POST" action="{{ route('admin.products.update', $product) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <input name="name" value="{{ $product->name }}"
                   class="w-full border px-3 py-2 rounded">

            <textarea name="description"
                      class="w-full border px-3 py-2 rounded">{{ $product->description }}</textarea>

            <input name="price" type="number" step="0.01"
                   value="{{ $product->price }}"
                   class="w-full border px-3 py-2 rounded">

            <input name="stock" type="number"
                   value="{{ $product->stock }}"
                   class="w-full border px-3 py-2 rounded">

            <input name="image_url"
                   value="{{ $product->image_url }}"
                   class="w-full border px-3 py-2 rounded">

            <button class="bg-blue-600 text-white px-4 py-2 rounded">
                Zapisz zmiany
            </button>
        </form>
    </div>
</x-app-layout>
