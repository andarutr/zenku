@extends('layouts.panel')

@section('title', 'Zenku - '. $user->name)

@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <center>
                        <span class="badge bg-warning text-white p-1" style="font-size: 15px">{{ $user->role->role }}</span>&nbsp;
                        <img src="/img/profile/{{ $user->picture}}" class="img-fluid rounded-circle" width="150">&nbsp;
                        @if(Cache::has('user-is-online-' . $user->id))
                        <span class="badge bg-primary text-white" style="font-size: 15px;">online</span> 
                        @else
                        <span class="badge bg-danger text-white" style="font-size: 15px;">offline</span> 
                        @endif
                        <h1 class="mt-3">{{ $user->name }}</h1> 
                        <p>({{ $user->email }})</p>
                    </center>
                    <?= $user->bio ?>
                    <p class="mt-3">Bergabung Sejak : {{ \Carbon\Carbon::parse($user->created_at)->format('d F Y') }}</p><br>
                </div>
                <div class="col-lg-2"></div>
                @if($user->role->role === 'Guru')
                <div class="col-lg-12 p-3">
                    <h2>Materi Terbaru</h2>
                </div>
                    @foreach($materi as $mat)
                    @if($mat->user->name === $user->name)
                    <div class="col-lg-4 mb-3 p-3">
                        <div class="card shadow" style="border-radius: 25px">
                            <img src="/img/materi/{{ $mat->picture_card }}" class="card-img-top" style="border-radius: 25px 25px 10px 10px">
                            <div class="card-body">
                                <span class="badge bg-primary text-white mb-3">{{ $mat->category->category}}</span>
                                <h5 class="card-title">
                                    <a href="{{ route('user.materi.show', ['id' => $mat->id, 'url' => $mat->url_card]) }}" style="text-decoration: none;">{{ $mat->title_card  }}</a>
                                    @if($mat->is_active == 'active')<small><i class="fas fa-check-circle"></i></small>@endif
                                </h5>
                                <p class="card-text"><img src="/img/profile/{{ $mat->user->picture }}" class="img-fluid rounded-circle" width="25"> <a href="/bio/{{ str_replace(' ', '-', strtolower($mat->user->name)) }}" style="text-decoration: none; color:black">{{ $mat->user->name }}</a></p>
                                @php
                                    $likes = \DB::table('likes')->where(['card_id' => $mat->id,'user_id' => Auth::user()->id])->first();
                                @endphp
                                <a href="{{ route('user.like.store', ['id' => $mat->id]) }}" class="btn btn-md"><i class="fas fa-heart 
                                    @isset($likes)
                                    text-danger
                                    @endisset"></i></a>
                                    
                                <a href="{{ route('user.materi.show', ['id' => $mat->id, 'url' => $mat->url_card]) }}" class="btn btn-md"><i class="fas fa-comment text-secondary"></i></a>
                                <a href="{{ route('user.materi.show', ['id' => $mat->id, 'url' => $mat->url_card]) }}" class="btn btn-primary"><i class="fas fa-book-reader"></i> Belajar</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
