<x-app-layout>
    <h1 class="text-3xl font-bold mb-8">Elektronika</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        @foreach($products as $product)
            <div class="bg-white rounded shadow p-4 flex flex-col">

                {{-- ZDJĘCIE i nazwa --}}
                <div class="h-48 w-full flex items-center justify-center bg-gray-50 mb-4">
                    <img src="{{ $product->image_url }}"
                        alt="{{ $product->name }}"
                        class="max-h-full max-w-full object-contain">
                </div>

                {{-- NAZWA --}}
                <h2 class="font-semibold text-lg mb-1">
                    {{ $product->name }}
                </h2>

                {{-- CENA --}}
                <p class="text-xl font-bold mb-3">
                    {{ number_format($product->price, 2) }} zł
                </p>

                {{-- PRZYCISK --}}
                <a href="{{ route('shop.show', $product) }}"
                   class="btn mt-auto text-center">
                    Zobacz produkt
                </a>
            </div>
        @endforeach

    </div>
</x-app-layout>
