@extends('layouts.customApp')


@section('content')
    <ul class="flex flex-col">
        @livewire('chat', ['chat_id' => $chat_id])
    </ul>
@endsection