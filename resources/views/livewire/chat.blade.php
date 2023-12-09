<div class="flex flex-col rounded bg-gray-200 text-left w-full max-w-7xl  mx-auto">
    <nav class="bg-gray-100 border-4 border-indigo-200 border-x-indigo-500 flex flex-col py-2 px-4" wire:model="GetChatInfo">
        <ul class="flex flex-row justify-between font-bold">
            <li class="text-green-600">@foreach($chat as $key){{ $key->name }}@endforeach</li>
            
            <li class="text-green-600"><a href="{{ route('teams.show', $chat_id) }}">Налаштування</a> </li>
        </ul>
    </nav>
    <div class="bg-gray-100 border-4 border-indigo-200 border-y-indigo-500 flex flex-col py-2 px-5">
        <p class="font-bold text-green-900 text-xl mt-5" wire:model="GetMessages"></p>
        <ul class="flex flex-col mt-3 overflow-auto h-96" id="message_history">
            @foreach($messages as $key)
                <?php 
                    $message_author = App\Models\User::where('id', '=', $key->user_id)->get();
                ?>
                <li class="text-gray-900 select-none text-green-600 relative py-2 pl-3 pr-9 rounded-md transition duration-200 hover:bg-blue-500 hover:text-gray-300 mb-2">
                    @foreach($message_author as $author)
                        <div class="flex items-center" wire:poll.15ms>
                            <img src="{{ $author->profile_photo_url }}" alt="{{ $author->name }}" class="h-7 w-7 rounded-full object-cover">
                            <span class="ml-3 block font-bold truncate">{{ $author->name }}</span>
                            
                            @if($author->id == Auth::id())
                                <form action="{{ route('DeleteMessage', ['chat_id' => $chat_id, 'id' => $key->id]) }}" class="ml-2" method="post">
                                    @csrf
                                    <button type="submit"  class="text-yellow-400 ml-3 hover:text-red-500 focus:outline-none">Видалити</button>
                                </form>
                            @endif
                        </div>
                    @endforeach

                    <p class="font-semibold">{{ $key->message }}</p>
                </li>
            @endforeach
        </ul>  
        
        
        <form action="{{ route('SendMessage', $chat_id) }}" class="bg-white-200 flex flex-col md:flex-row" method="POST">
            @csrf
            <div class="relative">
                <textarea type="text" placeholder="Написати повідомлення... " cols=100 class="w-full bg-transparent border-b border-purple-500 py-2 px-3 outline-none" name="message" required></textarea>
                <div>
                    <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded-l-none">Відправити</button>
                </div>
            </div>
        </form>