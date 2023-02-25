<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $link;

    public function mount($link) {
        $this->link = $link;
    }

    public function render()
    {
        return view('livewire.button');
    }
}
