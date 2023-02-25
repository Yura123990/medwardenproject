<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;

class ChatsList extends Component
{
    public $allTeams;

    public function render()
    {
        $this->allTeams = Auth::user()->allTeams();
        
        return view('livewire.chats-list');
    }
}
