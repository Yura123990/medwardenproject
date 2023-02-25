<div class="display-flex">
    @foreach ($allTeams as $team)
        <li class="text-gray-900 select-none relative py-2 pl-3 pr-9 rounded-md transition duration-200 bg-gray-200 hover:bg-purple-400 mb-2">
            <a href="{{ route('ChatMessages', $team->id) }}">
                <div class="flex items-center">
                    <img src="{{ $team->owner->profile_photo_url }}" alt="{{ $team->owner->name }}" class="h-7 w-7 rounded-full object-cover">
                    <span class="ml-3 block font-normal truncate">{{ $team->name }}</span>
                </div>
            </a>
        </li> 
    @endforeach
</div>
