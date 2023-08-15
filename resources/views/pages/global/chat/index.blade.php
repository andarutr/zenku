@extends('layouts.panel')

@section('title', 'Zenku - Chatting')

@section('content')
<div class="row mb-5">
    <div class="col-lg-8 mx-auto">
      <h3>Recent Chat</h3><a href="/zendoc/zenku(chat).pdf" class="badge bg-success text-white">panduan penggunaan</a>
    </div>
    @foreach($chat_from_me as $chat)
    @php
    $count_chat = DB::table('messages')->where('session_chat', $chat->session_chat)->count();
    $is_online = DB::table('chats')->where('user_id', Auth::user()->id)->count();
    @endphp
    <div class="col-lg-8 mx-auto">
        <div class="card shadow mt-3">
            <div class="card-body">
              <img src="/img/profile/{{ $chat->picture }}" class="img-fluid rounded-circle" width="80">&nbsp; <a href="/bio/{{ str_replace(' ', '-', strtolower($chat->name)) }}" style="text-decoration: none; color: black;">To : {{ $chat->name }}</a> 
              @if(Cache::has('user-is-online-' . $chat->is_online))
              <span class="badge bg-primary text-white">online</span> 
              @else
              <span class="badge bg-danger text-white">offline</span> 
              @endif
              <span class="badge bg-success text-white"><i class="fas fa-comment"></i> {{ $count_chat }}</span>
              <p class="mt-3">Topik : {{ $chat->topic_chat }} <a href="/{{ Request::segment(1) }}/chat/session/{{ $chat->session_chat }}" class="badge bg-primary text-white">lanjutkan chat</a></p>
              <p>{{ \Carbon\Carbon::parse($chat->created_at)->format('d F Y H:i') }}</p>
            </div>
        </div>
    </div>
    @endforeach
    @foreach($chat_from_other as $chat)
    @php
    $count_chat = DB::table('messages')->where('session_chat', $chat->session_chat)->count();
    @endphp
    <div class="col-lg-8 mx-auto">
        <div class="card shadow mt-3">
            <div class="card-body">
              <img src="/img/profile/{{ $chat->picture }}" class="img-fluid rounded-circle" width="80">&nbsp; <a href="/bio/{{ str_replace(' ', '-', strtolower($chat->name)) }}" style="text-decoration: none; color: black;">From : {{ $chat->name }}</a> 
              @if(Cache::has('user-is-online-' . $chat->is_online))
              <span class="badge bg-primary text-white">online</span> 
              @else
              <span class="badge bg-danger text-white">offline</span> 
              @endif
              <span class="badge bg-success text-white"><i class="fas fa-comment"></i> {{ $count_chat }}</span> 
              <p class="mt-3">Topik : {{ $chat->topic_chat }} <a href="/{{ Request::segment(1) }}/chat/linked_session/{{ $chat->session_chat }}" class="badge bg-primary text-white">lanjutkan chat</a></p>
              <p>{{ \Carbon\Carbon::parse($chat->created_at)->format('d F Y H:i') }}</p>
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-lg-12 text-center">
        <button type="button" class="btn btn-lg rounded-circle btn-success mt-4" data-toggle="modal" data-target="#startChat">+</button>
    </div>
</div>

<div class="modal fade" id="startChat" tabindex="-1" role="dialog" aria-labelledby="startChat" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Poinku</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                @foreach($users as $user)
                @if($user->name !== Auth::user()->name)
                <div class="col-8 mb-5">
                    <img src="/img/profile/{{ $user->picture }}" class="img-fluid rounded-circle" width="25"> {{ $user->name }} <a href="/{{ Request::segment(1) }}/chat/{{ $user->name }}/{{ rand(0, 10000000) }}" class="badge bg-success text-white">mulai chat</a>
                </div>
                <hr/>
                @endif
                @endforeach
            </div>
        </div>
      </div>
    </div>
</div>
@endsection