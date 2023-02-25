<div class="flex flex-col rounded bg-gray-200 text-left w-full max-w-7xl mx-auto">
    <nav class="bg-gray-300 flex flex-col rounded py-2 px-4" wire:model="GetChatInfo">
        <ul class="flex flex-row justify-between font-bold">
            <li class="text-purple-600">@foreach($chat as $key){{ $key->name }}@endforeach</li>
            <li class="text-purple-600">{{ $users_count }}</li>
            <li class="text-purple-600"><a href="{{ route('teams.show', $chat_id) }}">Settings</a> </li>
        </ul>
    </nav>

    <div class="bg-white-200 flex flex-col py-2 px-5">
        <p class="font-bold text-purple-500 text-xl mt-5" wire:model="GetMessages">Messages:</p>
        <ul class="flex flex-col mt-3 overflow-auto h-96" id="message_history">
            @foreach($messages as $key)
                <?php 
                    $message_author = App\Models\User::where('id', '=', $key->user_id)->get();
                ?>
                <li class="text-gray-900 select-none text-purple-600 relative py-2 pl-3 pr-9 rounded-md transition duration-200 bg-gray-200 hover:bg-purple-500 hover:text-gray-300 mb-2">
                    @foreach($message_author as $author)
                        <div class="flex items-center" wire:poll.15ms>
                            <img src="{{ $author->profile_photo_url }}" alt="{{ $author->name }}" class="h-7 w-7 rounded-full object-cover">
                            <span class="ml-3 block font-bold truncate">{{ $author->name }}</span>
                            
                            @if($author->id == Auth::id())
                                <form action="{{ route('DeleteMessage', ['chat_id' => $chat_id, 'id' => $key->id]) }}" class="ml-2" method="post">
                                    @csrf
                                    <button type="submit"  class="ml-3 hover:text-purple-100 focus:outline-none">Delete</button>
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
            <textarea type="text" placeholder="Send message: " cols="100" class="text-purple-600 font-semibold rounded bg-grey-500 focus:outline-none py-2 px-3" name="message" required></textarea>
            <button type="submit" class="rounded w-24 h-12 text-white mt-3 md:mt-0 md:ml-5 bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50">Submit</button>
        </form>
    </div>
</div>