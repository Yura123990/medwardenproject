<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold font-mono text-xl text-green-800 leading-tight">
            {{ __('Зміна ролі користувача') }}
        </h2>
    </x-slot>

        @if (session('success'))
            <div class="bg-green-200 text-green-800 border-l-4 border-green-600 p-4 mb-6">
                {{ session('success') }}
            </div>
        @endif

        <form class="px-4" method="POST" action="{{ route('update-user-role') }}">
            @csrf

            <div class="mb-4">
                <label for="user_id" class="block">ID користувача</label>
                <input type="text" name="user_id" id="user_id" class="border p-2">
            </div>

            <div class="mb-4">
                <label for="new_role" class="block">Нова роль</label>
                <select name="new_role" id="new_role" class="border p-2">
                    <option value="patient">Пацієнт</option>
                    <option value="admin">Адміністратор</option>
                    <option value="doctor">Лікар</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white rounded px-4 py-2">Змінити роль</button>
        </form>
</x-app-layout>
