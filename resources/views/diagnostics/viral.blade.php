<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('Анкета для визначення вірусного захворювання') }}
        </h2>
    </x-slot>

        @if (session('result'))
            <div class="bg-green-200 text-green-800 border-l-4 border-green-600 p-4 mb-6">
                {{ session('result') }}
            </div>
        @endif
    
    <form action="#" method="POST" class="py-4 ml-16 mr-16">
        @csrf

        @foreach ($symptoms as $index => $symptom)
    <div class="mb-4">
        <label class="block font-semibold mb-2" for="sl{{ $index + 1 }}">{{ $symptom }}</label>
        <select name="sl{{ $index + 1 }}" class="bg-white hover:bg-slate-100 border p-2 w-full">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select>
    </div>
@endforeach

        <button type="submit" name="sb" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-700">
            {{ __('Відправити дані') }}
        </button>
    </form>
</x-app-layout>
