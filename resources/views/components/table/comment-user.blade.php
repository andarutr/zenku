<div>
    <div class="card mb-3">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Komentar</h6>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th>Foto</th>
                    <th>Materi</th>
                    <th>Komentar</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $comment)
                <tr>
                    <td>
                        <a href="/img/materi/{{ $comment->picture_card }}" data-fancybox>
                            <img src="/img/materi/{{ $comment->picture_card }}" width="100">
                        </a>
                    </td>
                    <td>{{ $comment->title_card }}</td>
                    <td>{{ $comment->comment }}</td>
                    <td width="5">
                        <a href="{{ route('user.comment.edit', ['id_comment' => $comment->id_comment]) }}" class="btn btn-md btn-success"><i class="fas fa-edit"></i></a>
                    </td>
                    <td width="5">
                        <form action="{{ route('user.comment.destroy', ['id_comment' => $comment->id_comment]) }}" method="POST">@csrf @method('delete')
                            <button type="submit" class="btn btn-md btn-danger" onclick="return confirm('Yakin ingin menghapus komentar ?')"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        <div class="card-footer"></div>
    </div>
    {{ $comments->links() }}
</div>