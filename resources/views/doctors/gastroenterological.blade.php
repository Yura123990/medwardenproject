<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Анкета для визначення гастроентерологічного захворювання') }}
        </h2>
    </x-slot>
    <form action="#" method="POST" class="py-4 ml-16 mr-16">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl1">Нудота</label>
            <select name="sl1" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl2">Печія, кисла відрижка</label>
            <select name="sl2" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl3">Кислий чи металевий присмак у роті</label>
            <select name="sl3" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl4">Сильний біль у тілі</label>
            <select name="sl4" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl5">Зниження апетиту</label>
            <select name="sl5" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl6">Нудота, блювота</label>
            <select name="sl6" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl7">Здуття живота</label>
            <select name="sl7" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl8">Слабкість у тілі</label>
            <select name="sl8" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl9">Слізний стілець</label>
            <select name="sl9" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl10">Гіркота в роті</label>
            <select name="sl10" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl11">Почуття печіння та болю за грудиною</label>
            <select name="sl11" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl12">Часта гикавка</label>
            <select name="sl12" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl13">Відрижка</label>
            <select name="sl13" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl14">Втрата ваги</label>
            <select name="sl14" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl15">Непостійний стілець</label>
            <select name="sl15" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl16">Висипання на шкірі</label>
            <select name="sl16" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl17">Сухий кашель</label>
            <select name="sl17" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl18">Неприємний запах із рота</label>
            <select name="sl18" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl19">Біль в животі</label>
            <select name="sl19" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl20">Біль у кишечнику</label>
            <select name="sl20" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <button type="submit" name="sb" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-700">
            {{ __('Відправити дані') }}
        </button>
    </form>
</x-app-layout>
