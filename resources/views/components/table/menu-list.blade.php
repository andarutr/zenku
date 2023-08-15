<div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Menu Management</h6>
    </div>
    <div class="table-responsive p-3">
      <table class="table align-items-center table-flush" id="dataTable">
        <thead class="thead-light">
          <tr>
            <th>Menu</th>
            <th>Kategori</th>
            <th>Role</th>
            <th>Url</th>
            <th colspan="2">Action</th>
            <th style="display: none"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($menus as $mn)
            <tr>
                <td><a href="#">{{ $mn->name_menu }}</a></td>
                <td>{{ $mn->category_menu->category_menu }}</td>
                <td>{{ $mn->role->role }}</td>
                <td>{{ $mn->url_menu }}</td>
                <td>
                  <a href="{{ route('admin.menu.edit', ['menu' => $mn->id]) }}" class="btn btn-md btn-success"><i class="fas fa-edit"></i></a>&nbsp;
                </td>
                <td>
                  <form action="{{ route('admin.menu.destroy', ['menu' => $mn->id]) }}" method="POST">@csrf @method('delete')
                    <button type="submit" class="btn btn-md btn-danger" onclick="return confirm('Yakin ingin menghapus menu ?')"><i class="fas fa-trash"></i></button>
                  </form>
                </td>
                <td style="display: none"></td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>