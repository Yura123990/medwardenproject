<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Team;
use DB;
use Auth;

class ChatController extends Controller
{
    public function ChatView($id) {

        if(Auth::user()->belongsToTeam(Team::find($id))) {
            return view('chat', ['chat_id' => $id]);
        } else {
            return redirect()->route('home');
        }
        
    }

    public function SendMessage(Request $req, $id) {
        $message = new Message;
        
        $message->team_id = $id;
        $message->user_id = Auth::id();
        $message->message = $req->input('message');

        $message->save();
        
        return redirect()->route('ChatMessages', $id);
    }


    public function DeleteMessage($chat_id, $id) {
        $message = Message::find($id);
        
        $message->delete();
        
        return redirect()->route('ChatMessages', $chat_id);
    }

    public function joinTeam($id) {
        if(Auth::user()->belongsToTeam(Team::find($id))) {
            return redirect()->route('ChatMessages', ['id' => $id]);
        } else {
            DB::insert('insert into team_user (team_id, user_id, role) values (?, ?, ?)', [$id, Auth::id(), 'editor']);
            return redirect()->route('ChatMessages', ['id' => $id]);
        }
    }
}
