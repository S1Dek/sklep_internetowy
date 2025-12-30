<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white rounded shadow p-6">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <img src="{{ $product->image_url }}"
                 alt="{{ $product->name }}"
                 class="w-full object-contain">

            <div>
                <h1 class="text-3xl font-bold mb-4">
                    {{ $product->name }}
                </h1>

                <p class="text-xl font-semibold mb-4">
                    {{ number_format($product->price, 2) }} zł
                </p>

                <p class="text-gray-700 mb-6">
                    {{ $product->description }}
                </p>

                @auth
                    <button class="btn">
                        Kup
                    </button>
                @else
                    <a href="{{ route('login') }}" class="btn">
                        Zaloguj się, aby kupić
                    </a>
                @endauth
            </div>

        </div>
    </div>
</x-app-layout>
