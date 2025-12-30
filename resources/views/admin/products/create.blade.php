<x-app-layout>
    <div class="bg-white p-6 rounded shadow max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Dodaj produkt</h1>

        <form method="POST"
              action="{{ route('admin.products.store') }}"
              class="space-y-4">

            @csrf

            <div>
                <label class="block font-semibold">Nazwa</label>
                <input name="name"
                       value="{{ old('name') }}"
                       class="w-full border px-3 py-2 rounded">
                @error('name') <div class="text-red-600">{{ $message }}</div> @enderror
            </div>

            <div>
                <label class="block font-semibold">Opis</label>
                <textarea name="description"
                          class="w-full border px-3 py-2 rounded">{{ old('description') }}</textarea>
            </div>

            <div>
                <label class="block font-semibold">Cena (zł)</label>
                <input name="price"
                       type="number"
                       step="0.01"
                       value="{{ old('price') }}"
                       class="w-full border px-3 py-2 rounded">
                @error('price') <div class="text-red-600">{{ $message }}</div> @enderror
            </div>

            <div>
                <label class="block font-semibold">Ilość na stanie</label>
                <input name="stock"
                       type="number"
                       value="{{ old('stock') }}"
                       class="w-full border px-3 py-2 rounded">
                @error('stock') <div class="text-red-600">{{ $message }}</div> @enderror
            </div>

            <div>
                <label class="block font-semibold">URL obrazka</label>
                <input name="image_url"
                       value="{{ old('image_url') }}"
                       class="w-full border px-3 py-2 rounded">
                @error('image_url') <div class="text-red-600">{{ $message }}</div> @enderror
            </div>

            <div class="flex justify-end space-x-2">
                <a href="{{ route('admin.products.index') }}"
                   class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">
                    Anuluj
                </a>

                <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Zapisz produkt
                </button>
            </div>

        </form>
    </div>
</x-app-layout>
