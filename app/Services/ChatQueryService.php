<?php
namespace App\Services;

use App\Models\Chat;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatQueryService 
{
    public function chat_from_me()
    {
        $data = Chat::orderByDesc('id')
                    ->where('user_id', Auth::user()->id)
                    ->join('users','users.id','=','chats.linked_user')
                    ->select('chats.*','users.name','users.picture','users.id as is_online')
                    ->get();

        return $data;
    }

    public function chat_from_other()
    {
        $data = Chat::orderByDesc('id')
                    ->where('linked_user', Auth::user()->id)
                    ->join('users','users.id','=','chats.user_id')
                    ->select('chats.*','users.name','users.picture','users.id as is_online')
                    ->get();

        return $data;
    }

    public function chat_user_linked($session_chat)
    {
        $data = Chat::where('session_chat', $session_chat)
                    ->join('users','users.id','=','chats.linked_user')
                    ->join('roles','roles.id','=','users.role_id')
                    ->select('users.name','users.picture','chats.*','roles.role')
                    ->first();
        
        return $data;
    }

    public function chat_message($session_chat)
    {
        $data = Message::orderBy('created_at','asc')
                    ->where('session_chat', $session_chat)
                    ->join('users','users.id','=','messages.user_id')
                    ->select('users.name','users.picture','messages.*')
                    ->get();
                    
        return $data;
    }

    public function chat_user($session_chat)
    {
        $data = Chat::where('session_chat', $session_chat)
                    ->join('users','users.id','=','chats.user_id')
                    ->join('roles','roles.id','=','users.role_id')
                    ->select('users.name','users.picture','chats.*','roles.role')
                    ->first();

        return $data;
    }
}