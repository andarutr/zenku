<div class="card">
    <div class="card-body">
        <a href="/zendoc/zenku(forum).pdf" class="btn btn-sm btn-success mb-3">panduan penggunaan</a>
        <div class="card">
            <div class="card-body p-5">
                @foreach($forum as $frm)
                <h4>{{ $frm->title_forum }} 
                    @if(Auth::user()->id_role === 2)
                    <small>
                        <form action="{{ route('guru.forum.destroy', $frm->id_forum) }}" method="POST">@csrf @method('delete')
                            <button class="badge bg-danger text-white" onclick="return confirm('Yakin ingin menghapus diskusi ini?')"><i class="fas fa-trash"></i></button>
                        </form>
                    </small>
                    @endif
                </h4>
                <p><?= $frm->description ?></p>
                <p><i class="fas fa-clock"></i> {{ $frm->created_at }} &nbsp; <i class="fas fa-eye"> {{ $frm->views_forum }}</i></p>
                <a href="forum/{{ $frm->url_forum }}" class="btn btn-sm btn-primary mt-1 mb-4">Kunjungi</a>
                <a href="forum/balas/{{ $frm->id_forum.'/'.$frm->url_forum }}" class="btn btn-sm btn-success mt-1 mb-4">Balas</a>
                <p>
                    <img src="/img/profile/{{ $frm->picture }}" class="img-fluid rounded-circle" width="35" /> &nbsp;<a style="text-decoration: none; color: gray;" href="/bio/{{ str_replace(' ', '-', strtolower($frm->name)) }}"><b>{{ $frm->name }}</b></a> 
                    @if(Cache::has('user-is-online-'. $frm->id_user))
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