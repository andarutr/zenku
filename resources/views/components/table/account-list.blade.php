<div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Account</h6>
    </div>
    <div class="table-responsive p-3">
      <table class="table align-items-center table-flush" id="dataTable">
        <thead class="thead-light">
          <tr>
            <th>Foto</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Whatsapp</th>
            <th>Role</th>
            <th colspan="2">Action</th>
            <th style="display:none"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            @if($user->role === 'Guru' OR $user->role === 'User')
            <tr>
                <td>
                    <img src="/img/profile/{{ $user->picture }}" class="img-fluid rounded-circle" width="50"/>
                </td>
                <td>{{ $user->name }} <a href="/bio/{{ str_replace(' ', '-', strtolower($user->name)) }}" class="badge bg-primary text-white"><i class="fas fa-eye"></i></a> <a href="/admin/ganti-password/akun/{{ $user->id }}" class="badge bg-warning text-white"><i class="fas fa-lock"></i></a></td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->whatsapp }}</td>
                <td>{{ $user->role }}</td>
                <td>
                  <a href="{{ route('admin.account.edit', ['account' => $user->id]) }}" class="btn btn-md btn-success"><i class="fas fa-edit"></i></a>&nbsp;
                </td>
                <td>
                  <form action="{{ route('admin.account.destroy', ['account' => $user->id]) }}" method="POST">@csrf @method('delete')
                    <button type="submit" class="btn btn-md btn-danger" onclick="return confirm('Yakin ingin menghapus akun ini ?')"><i class="fas fa-trash"></i></button>
                  </form>
                </td>
                <td style="display:none"></td>
            </tr>
            @endif
            @endforeach
        </tbody>
      </table>
    </div>
  </div>