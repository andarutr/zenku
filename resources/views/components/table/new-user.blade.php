<div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Pengguna Baru</h6>
        <a class="m-0 float-right btn btn-danger btn-sm" href="/admin/account">Selengkapnya <i
                class="fas fa-chevron-right"></i></a>
    </div>
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Terdaftar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>
                        <img src="/img/profile/{{ $user->picture }}" width="50" height="50" class="img-fluid rounded-circle">
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><span class="badge badge-success">Siswa</span></td>
                    <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d F Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer"></div>
</div>