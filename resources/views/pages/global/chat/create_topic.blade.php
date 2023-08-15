@extends('layouts.panel')

@section('title', 'Zenku - Membuat Topik Pembicaraan')

@section('content')
<div class="row">
    <a href="/{{ Request::segment(1) }}/chat" class="btn btn-success ml-3">Kembali</a>
    <div class="col-lg-12 text-center">
        <span class="badge bg-warning text-white p-1" style="font-size: 15px">{{ $user->role->role }}</span>&nbsp;
        <img src="/img/profile/{{ $user->picture }}" class="img-fluid rounded-circle" width="100" height="100">&nbsp;
        @if(Cache::has('user-is-online-' . $user->id))
        <span class="badge bg-primary text-white">Online</span> 
        @else
        <span class="badge bg-danger text-white">Offline</span> 
        @endif
        <h3 class="mt-2">{{ $user->name }}</h3>
        <h4 class="mt-2">Session Chat : {{ $session_chat }}</h3>
    </div>
</div>
<div class="row mb-5">
    <div class="col-lg-8 mx-auto">
        <div class="card shadow mt-3">
            <div class="card-body">
                <form class="form-inline" action="/{{ Request::segment(1) }}/chat/store" method="POST">@csrf
                    <h3>Topik</h3>
                    <p>
                        <input type="text" class="form-control" size="60" name="topic_chat">&nbsp;&nbsp;
                        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="session_chat" value="{{ $session_chat }}">
                        <input type="hidden" name="linked_user" value="{{ $user->id }}">
                        <button class="btn btn-primary">Kirim</button>
                    </p>
                    @error('topic_chat')<p class="text-danger">{{ $message }}</p>@enderror
                </form>
            </div>
        </div>
    </div>
</div>
@endsection