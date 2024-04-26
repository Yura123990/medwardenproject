@extends('layouts.customApp')

@section('content')
@if(Auth::check())
    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
    <ul class="flex flex-col">
        <h1 class="font-semibold text-xl text-center my-3">Список звернень</h1>
        @livewire('chats-list')
    </ul>
    @endif
    <div class="w-auto bg-green-100 px-10 py-10">
    <h2 class="font-bold font-mono text-5xl text-blue-800 leading-tigh px-0">
        {{ __('Вас вітає MedWarden! Виберіть те, що бажаєте зробити у меню вище') }}
    </h2>
    <p class="mt-2 py-6 w-full sm:w-1/2 ml-auto pl-2 border-l-double border-red-700 border-l-8 rounded-sm text-justify text-lg text-slate-700">
        “MedWarden” – це зручний інструмент, призначення якого виявляти проблеми зі здоров’ям у пацієнтів. У сервісі передбачено дві можливості – пацієнт може самостійно пройти тест для визначення діагнозу, або зв’язатися із медичним експертом, який поставить попередній діагноз.
    </p>
    </div>
      
@else 
<div class="w-full my-8 bg-blue-900 p-4">
    <div class="flex flex-col sm:flex-row items-center justify-between">
        <h3 class="text-1xl sm:text-3xl font-extrabold tracking-tight text-white mb-4 sm:mb-0">MedWarden — вебдодаток для визначення проблем зі здоров’ям</h3>
        <img class="w-60 sm:w-80 md:w-96 lg:w-80 xl:w-96" src="{{ asset('storage/image/doctors.png') }}" alt="">
    </div>
</div>
    
<p class="mt-2 w-full sm:w-1/2 ml-auto pl-2 border-l-double border-red-700 border-l-8 rounded-sm text-justify text-lg text-slate-700">
    “MedWarden” – це зручний інструмент, призначення якого виявляти проблеми зі здоров’ям у пацієнтів. У сервісі передбачено дві можливості – пацієнт може самостійно пройти тест для визначення діагнозу, або зв’язатися із медичним експертом, який поставить попередній діагноз.
</p>
        @livewire('button', ['link' => route('register')])
    </div>
@endif
@endsection