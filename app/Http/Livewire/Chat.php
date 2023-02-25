<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Team;
use App\Models\Message;
use DB;

class Chat extends Component
{
    public $chat;
    public $chat_id;
    public $messages;
    public $users_count;

    public function mount($chat_id) {
        $this->chat_id = $chat_id;

    }

    public function GetMessages() {
        while(true) {
            $this->messages = Message::where('team_id', '=', $this->chat_id)->get();
            time.sleep(5);
        }
    }

    public function GetChatInfo() {
        while(true) {
            $this->chat = Team::where('id', '=', $this->chat_id)->get();
            $this->users_count =  DB::table('team_user')->where('team_id', '=', $this->chat_id)->count();
            time.sleep(5);
        }
    }

    public function render()
    { 
        $this->chat = Team::where('id', '=', $this->chat_id)->get();
        $this->users_count =  DB::table('team_user')->where('team_id', '=', $this->chat_id)->count();
        $this->messages = Message::where('team_id', '=', $this->chat_id)->get();
        
        return view('livewire.chat');
    }
}
