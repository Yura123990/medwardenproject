<div>
    <input type="text" wire:model="searchTerm" placeholder="Search by name: " class="mb-3 px-3 py-2 text-purple-600 rounded focus:outline-none w-full">
    
    @foreach($teams as $team)
        <li class="text-gray-900 select-none relative py-2 pl-3 pr-9 rounded-md transition duration-200 bg-gray-200 hover:bg-purple-400 mb-2">
            <a href="{{ route('joinTeam', $team->id) }}">
                <div class="flex items-center">
                    <img src="{{ $team->owner->profile_photo_url }}" alt="{ $team->owner->name }}" class="h-7 w-7 rounded-full object-cover">
                    <span class="ml-3 block font-normal truncate">{{ $team->name }}</span>
                </div>
            </a>
        </li> 
    @endforeach
</div>
