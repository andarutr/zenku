<div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Menu Management</h6>
    </div>
    <div class="table-responsive p-3">
        <table class="table align-items-center table-flush" id="dataTable">
        <thead class="thead-light">
            <tr>
                <th>Foto</th>
                <th>Judul</th>
                <th>Author</th>
                <th>Status</th>
                <th colspan="2">Action</th>
                <td style="display: none;"></td>
            </tr>
        </thead>
        <tbody>
            @foreach($materi as $mtr)
            <tr>
                <td>
                    <a href="/img/materi/{{ $mtr->picture_card}}" data-fancybox>
                        <img src="/img/materi/{{ $mtr->picture_card}}" width="100">
                    </a>
                </td>
                <td>{{ $mtr->title_card }}</td>
                <td>{{ $mtr->name }}</td>
                <td>
                    @if($mtr->is_active == 'active')
                    <span class="btn btn-sm btn-primary text-white">{{ $mtr->is_active }}</span>
                    @else
                    <span class="btn btn-sm btn-danger text-white">{{ $mtr->is_active }}</span>
                    @endif
                </td>
                <td>
                    <a href="/penguji/materi/{{ $mtr->id_card }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                </td>
                <td>
                    <form action="{{ route('penguji.materi.update', $mtr->id_card) }}" method="POST">@csrf @method('put')
                        <button class="btn btn-success" onclick="return confirm('Yakin ingin memperbarui status?')"><i class="fas fa-edit"></i></button>
                    </form>
                </td>
                <td style="display: none;"></td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>