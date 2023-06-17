<div class="card">
    <div class="card-body">
        <h4>Status Online</h4>
        @foreach($users as $user)
        @if(Cache::has('user-is-online-' . $user->id))
        <p><img src="/img/profile/{{ $user->picture}}" class="img-fluid rounded-circle" width="25"> {{ $user->name }} <span class="badge bg-primary text-white">online</span></p><hr>
        @else
        <p><img src="/img/profile/{{ $user->picture}}" class="img-fluid rounded-circle" width="25"> {{ $user->name }} <span class="badge bg-danger text-white">offline</span></p><hr>
        @endif
        @endforeach
        <a href="">Selengkapnya</a>
    </div>
</div>