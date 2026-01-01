<x-app-layout>
    <h1 class="text-2xl font-bold mb-6">Finalizacja zamówienia</h1>

    <form method="POST" action="{{ route('checkout.store') }}" class="space-y-4">
        @csrf

        <input
            type="text"
            name="full_name"
            placeholder="Imię i nazwisko"
            class="w-full border px-3 py-2"
            required
        >

        <input
            type="email"
            name="email"
            placeholder="Email"
            class="w-full border px-3 py-2"
            required
        >

        <input
            type="text"
            name="phone"
            placeholder="Telefon"
            class="w-full border px-3 py-2"
        >

        <input
            type="text"
            name="address_line"
            placeholder="Ulica i numer"
            class="w-full border px-3 py-2"
            required
        >

        <input
            type="text"
            name="postal_code"
            placeholder="Kod pocztowy"
            class="w-full border px-3 py-2"
            required
        >

        <input
            type="text"
            name="city"
            placeholder="Miasto"
            class="w-full border px-3 py-2"
            required
        >

        <textarea
            name="notes"
            placeholder="Uwagi do zamówienia"
            class="w-full border px-3 py-2"
        ></textarea>

        <button
            type="submit"
            class="bg-indigo-600 text-white px-6 py-3 rounded"
        >
            Złóż zamówienie
        </button>
    </form>
</x-app-layout>
