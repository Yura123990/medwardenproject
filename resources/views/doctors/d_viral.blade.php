<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('Анкета для визначення вірусного захворювання') }}
        </h2>
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
                <option value="0">ГРВІ</option>
                <option value="1">Covid_19</option>
                <option value="2">Грип</option>
                <option value="3">Бронхіт</option>
                <option value="4">Оттит</option>
                <option value="5">Ларингіт</option>
                <option value="6">Ангіна</option>
            </select>
        </h3>
        </div>
    
        <!-- Symptom 1 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Нежить</label>
    
            <input type="number" name="symptom1_weight" class="bg-white hover:bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom1_intensity" class="bg-white hover:bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>
    
        <!-- Symptom 2 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Лихоманка</label>
    
            <input type="number" name="symptom2_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom2_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>
    
        <!-- Symptom 3 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Кашель</label>
    
            <input type="number" name="symptom3_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom3_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>
    
        <!-- Symptom 4 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Сильний біль у тілі</label>
    
            <input type="number" name="symptom4_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom4_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>
    
        <!-- Symptom 5 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Головний біль</label>
    
            <input type="number" name="symptom5_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom5_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>
    
        <!-- Symptom 6 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Кон'юктивіт</label>
    
            <input type="number" name="symptom6_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom6_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>
    
        <!-- Symptom 7 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Збільшення лімфовузлів</label>
    
            <input type="number" name="symptom7_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom7_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>
    
        <!-- Symptom 8 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Слабкість у тілі</label>
    
            <input type="number" name="symptom8_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom8_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>
    
        <!-- Symptom 9 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Блювання</label>
    
            <input type="number" name="symptom9_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom9_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>
    
        <!-- Symptom 10 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Ангіна</label>
    
            <input type="number" name="symptom10_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom10_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>
    
        <!-- Symptom 11 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Втрата апетиту</label>

            <input type="number" name="symptom11_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom11_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>

        <!-- Symptom 12 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Чхання</label>

            <input type="number" name="symptom12_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom12_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>

        <!-- Symptom 13 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Висока температура</label>

            <input type="number" name="symptom13_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom13_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>

        <!-- Symptom 14 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Діарея</label>

            <input type="number" name="symptom14_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom14_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>

        <!-- Symptom 15 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Біль у животі</label>

            <input type="number" name="symptom15_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom15_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>

        <!-- Symptom 16 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Втрата нюху</label>

            <input type="number" name="symptom16_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom16_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>

        <!-- Symptom 17 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Втрата смаку</label>

            <input type="number" name="symptom17_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom17_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>

        <!-- Symptom 18 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Втрата орієнтації в просторі</label>

            <input type="number" name="symptom18_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom18_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>

        <!-- Symptom 19 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Біль у м'язах і суглобах</label>

            <input type="number" name="symptom19_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom19_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>

        <!-- Symptom 20 -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Біль у грудях</label>

            <input type="number" name="symptom20_weight" class="bg-white hover-bg-slate-100 border p-2 w-20" placeholder="Вага" min="0" max="5" value="0">
            <input type="number" name="symptom20_intensity" class="bg-white hover-bg-slate-100 border p-2 w-28" placeholder="Типовість" min="0" max="10" value="0">
        </div>

        <button type="submit" name="sb" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-700">
            {{ __('Відправити дані') }}
        </button>
    </form>
    
</x-app-layout>
