<div class="card">
    <div class="card-body">
        <a href="balas/{{ $forum->id_forum }}/{{ $forum->url_forum }}" class="btn btn-sm btn-primary mb-3">Balas Diskusi</a>
        <div class="card">
            <div class="card-body p-5">
                <h3 class="mt-3 text-center">{{ $forum->title_forum }}</h3>
                <p><?= $forum->description ?></p>
                <p><i class="fas fa-calendar"></i> {{ $forum->created_at }} &nbsp; <i class="fas fa-eye">{{ $forum->views_forum }}</i></p>
                <p class="mt-4">
                    <img src="/img/profile/{{ $forum->picture }}" class="img-fluid rounded-circle" width="35" /> &nbsp;<a style="text-decoration: none; color: gray;" href="/bio/{{ str_replace(' ', '-', strtolower($forum->name)) }}"><b>{{ $forum->name }}</b></a> 
                    @if(Cache::has('user-is-online-'. $forum->id_user))
                    <span class="badge bg-primary text-white">online</span>
                    @else
                    <span class="badge bg-danger text-white">offline</span>
                    @endif
                </p>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body ml-5">
                @foreach($contents as $content)
                <p><?= $content->text_forum ?></p>
                <p><i class="fas fa-calendar"></i> {{ $forum->created_at }}</p>
                <p class="mt-4">
                    <img src="/img/profile/{{ $content->picture }}" class="img-fluid rounded-circle" width="35" /> &nbsp;<a style="text-decoration: none; color: gray;" href="/bio/{{ str_replace(' ', '-', strtolower($content->name)) }}"><b>{{ $content->name }}</b></a> 
                    @if(Cache::has('user-is-online-'. $content->id_user))
                    <span class="badge bg-primary text-white">online</span>
                    @else
                    <span class="badge bg-danger text-white">offline</span>
                    @endif
                </p>
                @if(Auth::user()->id_role === 2)
                    <small><a href="/guru/forum/balas/destroy/{{ $content->id_content_forum }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus reply ini?')"><i class="fas fa-trash"></i> hapus</a></small>
                @endif
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>