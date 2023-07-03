<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h4>Komentator</h4>
    </div>
    <div class="card-body">
        <center>
            <img src="/img/profile/{{ $user->picture }}" class="img-fluid rounded-circle mb-3" width="100">
        </center>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>CreatedAt</th>
                    <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d F Y, H:i') }}</td>
                </tr>
                <tr>
                    <th>UpdatedAt</th>
                    <td>{{ \Carbon\Carbon::parse($user->updated_at)->format('d F Y, H:i') }}</td>
                </tr>
            </thead>
        </table>
    </div>
</div>