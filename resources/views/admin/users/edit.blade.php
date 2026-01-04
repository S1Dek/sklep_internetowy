<x-app-layout>
    <div class="bg-white p-6 rounded shadow max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Edytuj użytkownika</h1>

        <form method="POST" action="{{ route('admin.users.update', $user) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-semibold">Imię</label>
                <input name="name"
                       value="{{ old('name', $user->name) }}"
                       class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="block font-semibold">Email</label>
                <input name="email"
                       value="{{ old('email', $user->email) }}"
                       class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="block font-semibold">Rola</label>
                <select name="role" class="w-full border rounded px-3 py-2">
                    <option value="admin" @selected($user->role === 'admin')>Admin</option>
                    <option value="moderator" @selected($user->role === 'moderator')>Moderator</option>
                    <option value="user" @selected($user->role === 'user')>User</option>
                </select>
            </div>

            <div>
                <label class="block font-semibold">Nowe hasło</label>
                <input type="password"
                       name="password"
                       class="w-full border rounded px-3 py-2"
                       placeholder="Zostaw puste, aby nie zmieniać">
            </div>

            <div class="flex justify-end space-x-2">
                <a href="{{ route('admin.users.index') }}"
                   class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">
                    Anuluj
                </a>

                <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Zapisz
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
