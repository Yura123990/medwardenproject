<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('Анкета для визначення серцево-судинного захворювання') }}
        </h2>
        <h3 class="font-mono text-xs text-blue-800 leading-tight">
            {{ __("1. Виберіть хворобу для заповнення даними.\n 2. Для кожного симптома при цій хворобі введіть:\n 1) Вагу(важкість) симптома, 0-5, де 0 - немає, 5 - дуже важкий \n 2) Типовість(коефіцієнт) симптома, 0-10, де 0 - зовсім не типовий, 10 - повністю типовий") }}
        </h3>
    </x-slot>

        @if (session('success'))
            <div class="bg-green-200 text-green-800 border-l-4 border-green-600 p-4 mb-6">
                {{ session('success') }}
            </div>
        @endif

    <form action="{{ route('d_viral') }}" method="POST" class="py-4 ml-16 mr-16">
        @csrf

        <div class="bg-yellow-100 p-4 rounded mb-4">
        <h3 class="font-semibold text-lg text-teal-800 leading-tight">
            {{ __('Виберіть хворобу для заповнення симптомами: ') }}
            <select name="sl1" class="bg-white hover:bg-slate-100 border p-2 text-orange-600 font-mono font-bold">
                <option value="7">Гіпертонія</option>
                <option value="8">ІХС</option>
                <option value="9">Інфаркт міокарда</option>
                <option value="10">Стенокардія</option>
                <option value="11">Тахікардія</option>
                <option value="12">Аритмія</option>
            </select>
        </h3>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2">Постійний кашель</label>
        
            <input type="number" name="symptom1_weight" class="bg-white hover:bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom1_intensity" class="bg-white hover:bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 2 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Підвищена втома, тремтіння рук</label>
        
            <input type="number" name="symptom2_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom2_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 3 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Бліде обличчя та сині губи</label>
        
            <input type="number" name="symptom3_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom3_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 4 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Підвищена температура</label>
        
            <input type="number" name="symptom4_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom4_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 5 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Сповільнення або посилення пульсу</label>
        
            <input type="number" name="symptom5_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom5_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 6 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Стабільно підвищений чи знижений кров'яний тиск</label>
        
            <input type="number" name="symptom6_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom6_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 7 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Набряки гомілок</label>
        
            <input type="number" name="symptom7_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom7_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 8 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Часті головні болі та запаморочення</label>
        
            <input type="number" name="symptom8_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom8_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 9 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Больові відчуття в ногах під час ходьби</label>
        
            <input type="number" name="symptom9_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom9_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 10 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Болі у грудях</label>
        
            <input type="number" name="symptom10_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom10_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 11 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Задуха</label>
        
            <input type="number" name="symptom11_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom11_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 12 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Втрата свідомості</label>
        
            <input type="number" name="symptom12_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom12_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 13 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Біль у хребті</label>
        
            <input type="number" name="symptom13_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom13_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 14 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Відчуття серця, що вискакує з грудей</label>
        
            <input type="number" name="symptom14_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom14_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 15 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Перебої у роботі серця</label>
        
            <input type="number" name="symptom15_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom15_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 16 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Набряки всього тіла</label>
        
            <input type="number" name="symptom16_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom16_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 17 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Порушення сну</label>
        
            <input type="number" name="symptom17_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom17_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>
        
        <!-- Symptom 18 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Нудота</label>
        
            <input type="number" name="symptom18_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" >
            <input type="number" name="symptom18_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" >
        </div>        

        <button type="submit" name="sb" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-700">
            {{ __('Відправити дані') }}
        </button>
    </form>
    
</x-app-layout>
