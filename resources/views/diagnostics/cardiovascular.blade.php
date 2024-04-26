<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('Анкета для визначення серцево-судинних захворювань') }}
        </h2>
    </x-slot>

    @if (session('result'))
    <div class="bg-green-200 text-green-800 border-l-4 border-green-600 p-4 mb-6">
        {{ session('result') }}
    </div>
    @endif

    <form action="#" method="POST" class="py-4 ml-16 mr-16">
        @csrf
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl1">Постійний кашель</label>
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
            <label class="block font-semibold mb-2" for="sl2">Підвищена втома, тремтіння рук</label>
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
            <label class="block font-semibold mb-2" for="sl3">Бліде обличчя та сині губи</label>
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
            <label class="block font-semibold mb-2" for="sl4">Підвищена температура</label>
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
            <label class="block font-semibold mb-2" for="sl5">Сповільнення або посилення пульсу</label>
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
            <label class="block font-semibold mb-2" for="sl6">Стабільно підвищений чи знижений кров'яний тиск</label>
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
            <label class="block font-semibold mb-2" for="sl7">Набряки гомілок</label>
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
            <label class="block font-semibold mb-2" for="sl8">Часті головні болі та запаморочення</label>
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
            <label class="block font-semibold mb-2" for="sl9">Больові відчуття в ногах під час ходьби</label>
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
            <label class="block font-semibold mb-2" for="sl10">Болі у грудях</label>
            <select name="sl10" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl11">Задуха</label>
            <select name="sl11" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl12">Втрата свідомості</label>
            <select name="sl12" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl13">Біль у хребті</label>
            <select name="sl13" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl14">Відчуття серця, що вискакує з грудей</label>
            <select name="sl14" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl15">Перебої у роботі серця</label>
            <select name="sl15" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl16">Набряки всього тіла</label>
            <select name="sl16" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl17">Порушення сну</label>
            <select name="sl17" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl18">Нудота</label>
            <select name="sl18" class="bg-white hover-bg-slate-100 border p-2 w-full">
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
