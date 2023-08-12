<div>
    <div class="card mb-3">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Likes</h6>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th>Foto</th>
                        <th>Nama Siswa</th>
                        <th>Feedback</th>
                        <th>Dibuat</th>
                        <th>Diperbarui</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedbacks as $feed)
                    <tr>
                        <td>
                            <a href="/img/profile/{{ $feed->picture }}" data-fancybox>
                                <img src="/img/profile/{{ $feed->picture }}" width="50" class="rounded-circle">
                            </a>
                        </td>
                        <td>{{ $feed->name }}</td>
                        <td>{{ $feed->message }}</td>
                        <td>{{ \Carbon\Carbon::parse($feed->created_at)->format('d F Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($feed->updated_at)->format('d F Y') }}</td>
                        <td>
                            <form action="{{ route('admin.feedback.destroy', $feed->id_feedback) }}" method="POST">@csrf @method('delete')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus feedback?')"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer"></div>
    </div>
    {{ $feedbacks->links() }}
</div>