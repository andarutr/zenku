<div>
    <div class="card mb-3">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Activity Account</h6>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th>Nama</th>
                    <th>Aktifitas</th>
                    <th>Dibuat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($activity as $act)
                <tr>
                    <td>
                        <img src="/img/profile/{{ $act->picture }}" width="50" class="img-fluid rounded-circle">&nbsp; {{ $act->name }}
                    </td>
                    <td>{{ $act->activity }}</td>
                    <td>{{ \Carbon\Carbon::parse($act->created_at)->format('d F Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        <div class="card-footer"></div>
    </div>
    {{ $activity->links() }}
</div>