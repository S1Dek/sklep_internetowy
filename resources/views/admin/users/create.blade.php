<x-app-layout>
    <h1>Dodaj użytkownika</h1>

    <form method="POST" action="{{ route('admin.users.store') }}">
        @csrf

        <input name="name" placeholder="Imię"><br>
        <input name="email" placeholder="Email"><br>
        <input name="password" type="password" placeholder="Hasło"><br>

        <select name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select><br>

        <button type="submit">Zapisz</button>
    </form>
</x-app-layout>
