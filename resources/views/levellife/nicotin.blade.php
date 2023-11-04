<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('Анкета для оцінки нікотинової залежності') }}
        </h2>
    </x-slot>
    @if (isset($total))
    <div class="bg-yellow-100 p-4 rounded mb-4">
        <h2 class="text-2xl text-blue-800 font-semibold">Ваш результат:  
            @if ($total >= 0 && $total <= 2)
                <span class="text-green-600 font-semibold">дуже слабка залежність або її немає</span>
            @elseif ($total > 2 && $total <= 4)
                <span class="text-green-800 font-semibold">слабка залежність</span>
            @elseif ($total > 4 && $total <= 5)
                <span class="text-yellow-800 font-semibold">середня залежність</span>
            @elseif ($total > 5 && $total <= 7)
                <span class="text-red-600 font-semibold">висока залежність</span>
            @elseif ($total > 7 && $total <= 10)
                <span class="text-red-800 font-semibold">дуже висока залежність</span>
            @endif
        </h2>
    </div>
    @endif

    <form action="{{ route('nicotin') }}" method="POST" class="py-4 ml-16 mr-16">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl1">Коли після того як Ви прокинетеся Ви викурюєте першу сигарету?</label>
            <select name="sl1" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=3>Протягом перших 5 хвилин</option>
                <option value=2>Протягом перших 6-30 хвилин</option>
                <option value=1>Протягом перших 30-60 хвилин</option>
                <option value=0>За годину або більше</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl2">Чи складно вам утриматися від куріння в місцях, де куріння заборонено?</label>
            <select name="sl2" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Так</option>
                <option value=0>Ні</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl3">Від якої цигарки Ви не можете легко відмовитись?</label>
            <select name="sl3" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Перша цигарка зранку</option>
                <option value=0>Всі останні</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl4">Скільки цигарок Ви викурюєте на день?</label>
            <select name="sl4" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=3>10 або менше</option>
                <option value=2>11-20</option>
                <option value=1>21-30</option>
                <option value=0>31 і більше</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl5">Ви курите частіше в перші години вранці, після того, як прокинетеся, чи протягом решти дня?</label>
            <select name="sl5" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>У перші години коли прокидаюсь</option>
                <option value=0>Протягом дня</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl6">Чи курите Ви, якщо хворі та змушені перебувати в ліжку цілий день?</label>
            <select name="sl6" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Так</option>
                <option value=0>Ні</option>
            </select>
        </div>

        <button type="submit" name="sb" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-700">
            {{ __('Відправити дані') }}
        </button>
    </form>
</x-app-layout>
