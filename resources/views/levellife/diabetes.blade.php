<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-yellow-800 leading-tight">
            {{ __('Анкета для оцінки ризику цукрового діабету') }}
        </h2>
    </x-slot>
    @if (isset($total))
    <div class="bg-green-100 p-4 rounded mb-4">
        <h2 class="text-2xl text-blue-800 font-semibold">Загальний ризик розвитку діабету протягом найближчих 10 років:</h2>
        <p> @if ($total < 7)
                низький: <span class="text-green-800 font-semibold">приблизно у одного зі 100 буде діабет</span>
            @elseif ($total >= 7 && $total <= 11)
                трохи підвищений: <span class="text-green-600 font-semibold">приблизно у одного з 25 буде діабет</span>
            @elseif ($total > 11 && $total <= 14)
                помірний: <span class="text-yellow-600 font-semibold">приблизно у одного з 6 буде діабет</span>
            @elseif ($total > 14 && $total <= 20)
                високий: <span class="text-red-600 font-semibold">приблизно у одного з трьох буде діабет</span>
            @elseif ($total > 20)
                дуже високий: <span class="text-red-800 font-semibold">приблизно у одного з двох буде діабет</span>
            @endif
        </p>
    </div>
    @endif

    <form action="#" method="POST" class="py-4 ml-16 mr-16">
        @csrf
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl1">1. Вік</label>
            <select name="sl1" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="0">менше 45 років</option>
                <option value="2">45–54 роки</option>
                <option value="3">55–64 роки</option>
                <option value="4">більше 65 років</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl2">2. Індекс маси тіла</label>
            <select name="sl2" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="0">менше 25 кг/м2</option>
                <option value="1">25–30 кг/м2</option>
                <option value="2">більше 30 кг/м2</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl3">3. Окружність талії (на рівні пупка). *Чоловіки/жінки*.</label>
            <select name="sl3" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="0">менше 94 см / менше 80 см</option>
                <option value="3">94–102 см / 80–88см</option>
                <option value="3">більше 102 см / більше 88 см</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl4">4. Наявність фізичної активності щонайменше 30 хв. на день (3 години на тиждень)</label>
            <select name="sl4" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="0">Так</option>
                <option value="1">Ні</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl5">5. Як часто Ви їсте овочі?</label>
            <select name="sl5" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="0">Кожен день</option>
                <option value="1">Не кожен день</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl6">6. Чи доводилося Вам приймати антигіпертензивні препарати регулярно?</label>
            <select name="sl6" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="0">Ні</option>
                <option value="2">Так</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl7">7. Чи знаходили у Вас підвищення глюкози крові (при профогляді, під час хвороби, при вагітності)?</label>
            <select name="sl7" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="0">Ні</option>
                <option value="5">Так</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl8">8. Чи був цукровий діабет у когось із Вашої родини?</label>
            <select name="sl8" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="0">Ні/Не знаю</option>
                <option value="3">Був: у дідуся/бабусі, тітки/дядька, двоюрідного брата/сестри</option>
                <option value="5">Був: у мого батька, брата/сестри, моєї дитини</option>
            </select>
        </div>
    
        <button type="submit" name="sb" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-700">
            {{ __('Надіслати на діагностику') }}
        </button>
    </form>
    
</x-app-layout>
