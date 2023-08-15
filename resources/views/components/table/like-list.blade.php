<div>
    <div class="card mb-3">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Likes</h6>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th>Foto</th>
                        <th>Nama Siswa</th>
                        <th>Materi</th>
                        <th>Dibuat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($likes as $like)
                    <tr>
                        <td>
                            <a href="/img/profile/{{ $like->user->picture }}" data-fancybox>
                                <img src="/img/profile/{{ $like->user->picture }}" width="50" class="rounded-circle">
                            </a>
                        </td>
                        <td>{{ $like->user->name }}</td>
                        <td>{{ $like->card->title_card }}</td>
                        <td>{{ \Carbon\Carbon::parse($like->created_at)->format('d F Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer"></div>
    </div>
    {{ $likes->links() }}
</div>