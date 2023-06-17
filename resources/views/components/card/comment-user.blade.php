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
                    <td>{{ $user->created_at }}</td>
                </tr>
                <tr>
                    <th>UpdatedAt</th>
                    <td>{{ $user->updated_at }}</td>
                </tr>
            </thead>
        </table>
    </div>
</div>