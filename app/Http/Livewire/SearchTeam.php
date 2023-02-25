<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Team;
use Auth;

class SearchTeam extends Component
{
    public $searchTerm;
    public $teams;

    public function render()
    {
        $searchTerm = $this->searchTerm;
        $this->teams = Team::where('name', 'LIKE', "%$searchTerm%")->get();
        return view('livewire.search-team');
    }
}
