@extends('layouts.customApp')

@section('content')
    <ul class="flex flex-col">
        <h1 class="font-semibold text-xl text-center my-3">Список звернень</h1>
        @livewire('test')
    </ul>
@endsection