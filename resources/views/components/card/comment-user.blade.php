<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h4>Komentator</h4>
    </div>
    <div class="card-body p-3">
        <center>
            <img src="/img/profile/{{ $comment->user->picture }}" class="img-fluid rounded-circle mb-3" width="100">
        </center>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <td>{{ $comment->user->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $comment->user->email }}</td>
                </tr>
                <tr>
                    <th>CreatedAt</th>
                    <td>{{ \Carbon\Carbon::parse($comment->created_at)->format('d F Y, H:i') }}</td>
                </tr>
                <tr>
                    <th>UpdatedAt</th>
                    <td>{{ \Carbon\Carbon::parse($comment->updated_at)->format('d F Y, H:i') }}</td>
                </tr>
            </thead>
        </table>
    </div>
</div>