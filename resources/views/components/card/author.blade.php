<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h4>Author</h4>
    </div>
    <div class="card-body">
        <center>
            <img src="/img/profile/{{ $author->user->picture }}" class="img-fluid rounded-circle mb-3" width="100">
        </center>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Author</th>
                    <td>{{ $author->user->name }} <a href="/bio/{{ str_replace(' ', '-', strtolower($author->user->name)) }}" class="badge bg-primary text-white"><i class="fas fa-eye"></i></a></td>
                </tr>
                <tr>
                    <th>Judul</th>
                    <td>{{ $author->title_card }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><span class="badge bg-primary p-2 text-white">{{ $author->is_active }}</span></td>
                </tr>
                <tr>
                    <th>Disukai</th>
                    <td>{{ $like_count }}</td>
                </tr>
                <tr>
                    <th>Komentar</th>
                    <td>{{ $comment_count }}</td>
                </tr>
                <tr>
                    <th>Visit</th>
                    <td>{{ $author->visit }}x Dikunjungi</td>
                </tr>
                <tr>
                    <th>Dibuat</th>
                    <td>{{ \Carbon\Carbon::parse($author->created_at)->format('d F Y') }}</td>
                </tr>
                <tr>
                    <th>Diperbarui</th>
                    <td>{{ \Carbon\Carbon::parse($author->updated_at)->format('d F Y') }}</td>
                </tr>
            </thead>
        </table>
    </div>
</div>