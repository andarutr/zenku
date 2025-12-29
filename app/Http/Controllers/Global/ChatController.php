<?php

namespace App\Http\Controllers\Global;

use Request as Req;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreChatRequest;
use App\Http\Requests\User\StoreMessageRequest;
use App\Services\ChatQueryService;
use App\Services\ChatService;

class ChatController extends Controller
{
    protected $chatService;
    protected $chatQueryService;

    public function __construct(ChatService $chatService, ChatQueryService $chatQueryService)
    {
        $this->chatService = $chatService;
        $this->chatQueryService = $chatQueryService;
    }

    public function index()
    {
        $data['menu'] = 'Chat';
        $data['users'] = User::all();
        $data['chat_from_me'] = $this->chatQueryService->chat_from_me();
        $data['chat_from_other'] = $this->chatQueryService->chat_from_other();
                                
        return view('pages.global.chat.index', $data);
    }

    public function create_topic(Request $req, $name, $session_chat)
    {
        $data['menu'] = 'Chat';
        $data['user'] = User::where('name', $name)->first();
        $data['session_chat'] = $session_chat;

        return view('pages.global.chat.create_topic', $data);            
    }

    public function store_topic(StoreChatRequest $req)
    {
        $this->chatService->store($req->all());
                    
        return redirect('/'.Req::segment(1).'/chat');
    }

    public function create_chat($session_chat)
    {
        $data['menu'] = 'Chat';
        $data['status_chat'] = 'From Me';
        $data['status_user'] = Chat::where('session_chat', $session_chat)->first();
        $data['user'] = $this->chatQueryService->chat_user_linked($session_chat);
        $data['messages'] = $this->chatQueryService->chat_message($session_chat);
        
        return view('pages.global.chat.chat_session', $data);
    }

    public function create_linked_chat($session_chat)
    {
        $data['menu'] = 'Chat';
        $data['status_chat'] = 'From You';
        $data['status_user'] = Chat::where('session_chat', $session_chat)->first();
        $data['user'] = $this->chatQueryService->chat_user($session_chat);
        $data['messages'] = $this->chatQueryService->chat_message($session_chat);
        
        return view('pages.global.chat.chat_session', $data);
    }

    public function store_chat(StoreMessageRequest $req)
    {
        $this->chatService->store_message($req->all());

        return redirect()->back();
    }
}
