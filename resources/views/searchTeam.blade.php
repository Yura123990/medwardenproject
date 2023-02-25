@extends('layouts.customApp')

@section('content')
    <ul class="flex flex-col">
        <h1 class="font-semibold text-xl text-center my-3">Search</h1>
        @livewire('search-team')
    </ul>
@endsection