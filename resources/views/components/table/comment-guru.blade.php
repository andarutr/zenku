<div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Komentar</h6>
    </div>
    <div class="table-responsive p-3">
        <table class="table align-items-center table-flush" id="dataTable">
        <thead class="thead-light">
            <tr>
                <th>Foto</th>
                <th>Nama Siswa</th>
                <th>Materi</th>
                <th>Komentar</th>
                <th>CreatedAt</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
            <tr>
                <td>
                    <a href="/img/profile/{{ $comment->user->picture }}" data-fancybox>
                        <img src="/img/profile/{{ $comment->user->picture }}" width="50" class="rounded-circle">
                    </a>
                </td>
                <td>{{ $comment->user->name }}</td>
                <td>{{ $comment->card->title_card }}</td>
                <td>{{ $comment->comment }}</td>
                <td>{{ \Carbon\Carbon::parse($comment->created_at)->format('d F Y') }}</td>
                <td>
                    <a href="{{ route('guru.komentar.show', $comment->id) }}" class="btn btn-md btn-primary"><i class="fas fa-eye"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>