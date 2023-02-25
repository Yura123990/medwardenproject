@extends('layouts.customApp')

@section('content')
@if(Auth::check())
    <ul class="flex flex-col">
        <h1 class="font-semibold text-xl text-center my-3">Teams List</h1>
        @livewire('chats-list' )
    </ul>
      
@else 
    <div class="w-100 my-8 h-36 bg-blue-900">
        <h3 class="p-4 inline-block text-1xl sm:text-3xl font-extrabold tracking-tight text-white">MedWarden — вебдодаток для визначення проблем зі здоров’ям</h1>
        <img class="w-60 inline-block" src="{{ asset('storage/image/doctors.png') }}" alt="">   
    </div>
    
    <p class="mt-2 w-1/3 m-9 pl-2 border-l-double border-red-700 border-l-8 rounded-sm text-justify text-lg text-slate-700">“MedWarden” – це зручний інструмент, призначення якого вивявляти проблеми зі здоров’ям у пацієнтів. У сервісі передбачено дві можливості – пацієнт може самостій пройти тест для визначення діагнозу, або зв’язатися із медичним експертом, який сам поставить попередній діагноз.</p>
        @livewire('button', ['link' => route('register')])
    </div>
@endif
@endsection