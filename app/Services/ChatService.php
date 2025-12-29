<?php
namespace App\Services;

use App\Models\Chat;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatService 
{
    public function store(array $data)
    {
        $store = Chat::create([
                    'session_chat' => $data['session_chat'],
                    'user_id' => Auth::user()->id,
                    'topic_chat' => $data['topic_chat'],
                    'linked_user' => $data['linked_user'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
        
        return $store;
    }

    public function store_message(array $data)
    {
        $store = Message::create([
                    'user_id' => Auth::user()->id,
                    'session_chat' => $data['session_chat'],
                    'message' => $data['message'],
                    'updated_at' => now(),
                    'created_at' => now()
                ]);

        return $store;
    }
}