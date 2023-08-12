<?php

namespace App\Http\Controllers\Global;

use Request as Req;
use App\Models\Chat;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $data['menu'] = 'Chat';
        $data['users'] = User::all();
        $data['chat_from_me'] = Chat::orderByDesc('id_chat')
                            ->where('id_user', Auth::user()->id)
                            ->join('users','users.id','=','chats.linked_user')
                            ->select('chats.*','users.name','users.picture','users.id as is_online')
                            ->get();
        $data['chat_from_other'] = Chat::orderByDesc('id_chat')
                                ->where('linked_user', Auth::user()->id)
                                ->join('users','users.id','=','chats.id_user')
                                ->select('chats.*','users.name','users.picture','users.id as is_online')
                                ->get();
                                
        return view('pages.global.chat.index', $data);
    }

    public function create_topic(Request $req, $name, $session_chat)
    {
        $data['menu'] = 'Chat';
        $data['user'] = User::where('name', $name)
                    ->join('roles','roles.id_role','=','users.id_role')
                    ->first();
        $data['session_chat'] = $session_chat;

        return view('pages.global.chat.create_topic', $data);            
    }

    public function store_topic(Request $req)
    {
        $this->validate($req, [
            'topic_chat' => 'required'
        ]);

        $store = Chat::create([
                        'session_chat' => $req->session_chat,
                        'id_user' => Auth::user()->id,
                        'topic_chat' => $req->topic_chat,
                        'linked_user' => $req->linked_user,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                    
        return redirect('/'.Req::segment(1).'/chat');
    }

    public function create_chat($session_chat)
    {
        $data['menu'] = 'Chat';
        $data['status_chat'] = 'From Me';
        $data['status_user'] = Chat::where('session_chat', $session_chat)->first();
        $data['user'] = Chat::where('session_chat', $session_chat)
                            ->join('users','users.id','=','chats.linked_user')
                            ->join('roles','roles.id_role','=','users.id_role')
                            ->select('users.name','users.picture','chats.*','roles.name_role')
                            ->first();
        $data['messages'] = Message::orderBy('created_at','asc')
                            ->where('session_chat', $session_chat)
                            ->join('users','users.id','=','messages.id_user')
                            ->select('users.name','users.picture','messages.*')
                            ->get();
        
        return view('pages.global.chat.chat_session', $data);
    }

    public function create_linked_chat($session_chat)
    {
        $data['menu'] = 'Chat';
        $data['status_chat'] = 'From You';
        $data['status_user'] = Chat::where('session_chat', $session_chat)->first();
        $data['user'] = Chat::where('session_chat', $session_chat)
                        ->join('users','users.id','=','chats.id_user')
                        ->join('roles','roles.id_role','=','users.id_role')
                        ->select('users.name','users.picture','chats.*','roles.name_role')
                        ->first();
        $data['messages'] = Message::orderBy('created_at','asc')
                            ->where('session_chat', $session_chat)
                            ->join('users','users.id','=','messages.id_user')
                            ->select('users.name','users.picture','messages.*')
                            ->get();
        
        return view('pages.global.chat.chat_session', $data);
    }

    public function store_chat(Request $req)
    {
        $this->validate($req, [
            'message' => 'required'
        ]);

        $store_message = Message::create([
                                'id_user' => Auth::user()->id,
                                'session_chat' => $req->session_chat,
                                'message' => $req->message,
                                'updated_at' => now(),
                                'created_at' => now()
                            ]);

        return redirect()->back();
    }
}
