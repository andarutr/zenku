<div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Menu Management</h6>
    </div>
    <div class="table-responsive p-3">
      <table class="table align-items-center table-flush" id="dataTable">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th style="width: 80%">Kategori</th>
            <th colspan="2" style="width: 10%">Action</th>
            <th style="display: none;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($categories as $ctg)
            <tr>
                <td><a href="#">{{ $ctg->id }}</a></td>
                <td>{{ $ctg->category }}</td>
                <td>
                    <a href="{{ route('admin.kategori.edit', ['kategori' => $ctg->id]) }}" class="btn btn-md btn-success"><i class="fas fa-edit"></i></a>&nbsp;
                </td>
                <td>
                  <form action="{{ route('admin.kategori.destroy', ['kategori' => $ctg->id]) }}" method="POST">@csrf @method('delete')
                    <button type="submit" class="btn btn-md btn-danger" onclick="return confirm('Yakin ingin menghapus kategori ?')"><i class="fas fa-trash"></i></button>
                  </form>
                </td>
                <td style="display: none;"></td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>