<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('Анкета для розрахунку індексу маси тіла.') }}
        </h2>
    </x-slot>
    @if (isset($bmi))
    <div class="bg-green-100 p-4 rounded mb-4">
        <h2 class="text-2xl text-blue-800 font-semibold">Індекс маси тіла: {{ $bmi }}</h2>
        <p> @if ($bmi < 7)
                Висока недостатність ваги: <span class="text-indigo-600 font-semibold">приблизно у одного зі 100 буде діабет</span>
            @elseif ($bmi >= 7 && $bmi < 18.5)
                У Вас знижений індекс: <span class="text-indigo-600 font-semibold">зверніться до лікаря, це може бути проблемою</span>
            @elseif ($bmi >= 18.5 && $bmi <= 27)
                Нормальний: <span class="text-green-600 font-semibold">Ви поза групою ризику, проте дотримуйтесь здорового способу життя</span>
            @elseif ($bmi > 27 && $bmi <= 30)
                Високий: <span class="text-yellow-800 font-semibold">у поєднанні з абдомінальним ожирінням, спадковою схильністю до цукрового діабету (ЦД) 2 типу та наявністю факторів ризику серцево-судинних ускладнень (дисліпідемія, АГ, ЦД 2 типу)</span>
            @elseif ($bmi > 30)
                Дуже високий: <span class="text-red-600 font-semibold">підвищена схильність до ожиріння</span>
            @endif
        </p>
    </div>
    @endif

    <form action="{{ route('indexmassbody') }}" method="POST" class="px-4">
        @csrf
        <div class="mb-4">
            <label class="block font-bold mb-2">Ваша вага (у кг):</label>
            <input type="number" name="weight" class="border p-2 w-full" placeholder="введіть свою вагу у кілограмах" step="0.01">
        </div>

        <div class="mb-4">
            <label class="block font-bold mb-2">Ваш зріст (у см):</label>
            <input type="number" name="height" class="border p-2 w-full" placeholder="Введіть свій зріст у сантиметрах" step="0.01">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
            {{ __("Розрахувати ІМТ") }}
        </button>
    </form>
    
</x-app-layout>
