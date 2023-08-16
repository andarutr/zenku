<div class="card">
    <div class="card-body">
        <a href="/zendoc/zenku(forum).pdf" class="btn btn-sm btn-success mb-3">panduan penggunaan</a>
        <div class="card">
            <div class="card-body p-5">
                @foreach($forum as $frm)
                <h4>{{ $frm->title_forum }} 
                    @if(Auth::user()->id_role === 2)
                    <small>
                        <form action="{{ route('guru.forum.destroy', $frm->id) }}" method="POST">@csrf @method('delete')
                            <button class="badge bg-danger text-white" onclick="return confirm('Yakin ingin menghapus diskusi ini?')"><i class="fas fa-trash"></i></button>
                        </form>
                    </small>
                    @endif
                </h4>
                <p><?= $frm->description ?></p>
                <p><i class="fas fa-clock"></i> {{ $frm->created_at }} &nbsp; <i class="fas fa-eye"> {{ $frm->views_forum }}</i></p>
                <a href="forum/{{ $frm->url_forum }}" class="btn btn-sm btn-primary mt-1 mb-4">Kunjungi</a>
                <a href="forum/balas/{{ $frm->id.'/'.$frm->url_forum }}" class="btn btn-sm btn-success mt-1 mb-4">Balas</a>
                <p>
                    <img src="/img/profile/{{ $frm->user->picture }}" class="img-fluid rounded-circle" width="35" /> &nbsp;<a style="text-decoration: none; color: gray;" href="/bio/{{ str_replace(' ', '-', strtolower($frm->user->name)) }}"><b>{{ $frm->user->name }}</b></a> 
                    @if(Cache::has('user-is-online-'. $frm->user_id))
                    <span class="badge bg-primary text-white">online</span>
                    @else
                    <span class="badge bg-danger text-white">offline</span>
                    @endif
                </p>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>