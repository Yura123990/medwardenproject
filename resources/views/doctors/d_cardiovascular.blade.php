<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('Анкета для визначення серцево-судинних захворювань') }}
        </h2>
    </x-slot>
    <form action="#" method="POST" class="py-4 ml-16 mr-16">
        @csrf
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl1">Кашель, що посилюється у лежачому положенні</label>
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
            <label class="block font-semibold mb-2" for="sl2">Підвищена стомлюваність, слабкість, тремтіння в руках</label>
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
            <label class="block font-semibold mb-2" for="sl3">Блідість обличчя, посинення губ, мочок вух, ніг</label>
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
            <label class="block font-semibold mb-2" for="sl4">Підвищення температури</label>
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
            <label class="block font-semibold mb-2" for="sl5">Зміна частоти та ритму пульсу</label>
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
            <label class="block font-semibold mb-2" for="sl7">Набряки в нижніх кінцівках</label>
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
            <label class="block font-semibold mb-2" for="sl8">Головні болі</label>
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
            <label class="block font-semibold mb-2" for="sl9">Запаморочення</label>
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
            <label class="block font-semibold mb-2" for="sl10">Больові відчуття в ногах під час ходьби</label>
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
            <label class="block font-semibold mb-2" for="sl11">Болі у грудях</label>
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
            <label class="block font-semibold mb-2" for="sl12">Задуха</label>
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
            <label class="block font-semibold mb-2" for="sl13">Непритомність без причини</label>
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
            <label class="block font-semibold mb-2" for="sl14">Біль у хребті</label>
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
            <label class="block font-semibold mb-2" for="sl15">Відчуття серця, що вискакує з грудей, перепочинок</label>
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
            <label class="block font-semibold mb-2" for="sl16">Завмирання ритму</label>
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
            <label class="block font-semibold mb-2" for="sl17">Набряклість</label>
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
            <label class="block font-semibold mb-2" for="sl18">Порушення сну, тремтіння в руках або ногах</label>
            <select name="sl18" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl19">Нудота</label>
            <select name="sl19" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=0>немає</option>
                <option value=1>дуже низький</option>
                <option value=2>низький</option>
                <option value=3>середній</option>
                <option value=4>високий</option>
                <option value=5>дуже високий</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl20">Почастішання пульсу, аритмія</label>
            <select name="sl20" class="bg-white hover-bg-slate-100 border p-2 w-full">
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
