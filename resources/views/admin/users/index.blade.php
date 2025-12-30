<x-app-layout>
    <div class="bg-white p-6 rounded shadow">

        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Użytkownicy</h1>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">Imię</th>
                        <th class="px-4 py-2 border">Email</th>
                        <th class="px-4 py-2 border">Rola</th>
                        <th class="px-4 py-2 border">Akcje</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($users as $user)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border">{{ $user->id }}</td>
                        <td class="px-4 py-2 border">{{ $user->name }}</td>
                        <td class="px-4 py-2 border">{{ $user->email }}</td>
                        <td class="px-4 py-2 border">
                            <span class="px-2 py-1 text-sm rounded
                                {{ $user->role === 'admin'
                                    ? 'bg-red-100 text-red-700'
                                    : 'bg-green-100 text-green-700' }}">
                                {{ $user->role }}
                            </span>
                        </td>
                        <td class="px-4 py-2 border space-x-2">
                            <a href="{{ route('admin.users.edit', $user) }}"
                               class="bg-yellow-400 text-black px-3 py-1 rounded hover:bg-yellow-500">
                                Edytuj
                            </a>

                            <form action="{{ route('admin.users.destroy', $user) }}"
                                  method="POST"
                                  class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700"
                                        onclick="return confirm('Usunąć użytkownika?')">
                                    Usuń
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</x-app-layout>
