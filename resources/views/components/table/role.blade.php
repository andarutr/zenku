<div class="card mb-3">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Role Access</h6>
    </div>
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Role</th>
                <th>ID Role</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{ $role->id_role }}</td>
                <td><a href="#">{{ $role->name_role }}</a></td>
                <td>
                    <button class="btn btn-primary">{{ $role->id_role }}</button>
                </td>
                <td>
                    @if($role->id_role > 3)
                    <a href="{{ route('admin.role.edit', ['role' => $role->id_role]) }}" class="btn btn-md btn-success"><i class="fas fa-edit"></i></a>&nbsp;
                    @else
                    <button class="btn btn-secondary"><i class="fas fa-edit"></i></button>&nbsp;
                    @endif
                </td>
                <td>
                    @if($role->id_role > 3)
                    <form action="{{ route('admin.role.destroy', ['role' => $role->id_role]) }}" method="POST">@csrf @method('delete')
                        <button type="submit" class="btn btn-md btn-danger" onclick="return confirm('Yakin ingin menghapus role ?')"><i class="fas fa-trash"></i></button>
                    </form>
                    @else
                    <button class="btn btn-secondary"><i class="fas fa-trash"></i></button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
{{ $roles->links() }}