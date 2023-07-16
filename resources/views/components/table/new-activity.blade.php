<div class="card">
    <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-light">Aktifitas Akun</h6>
    </div>
    <div>
        @foreach($activities as $activity)
        <div class="customer-message align-items-center">
            <a class="font-weight-bold" href="#">
                <div class="text-truncate message-title">{{ $activity->name }} telah {{ $activity->activity }} pada </div>
                <div class="small text-gray-500 message-time font-weight-bold">{{ \Carbon\Carbon::parse($activity->created_at)->format('d F Y H:i:s') }}</div>
            </a>
        </div>
        @endforeach
        <div class="card-footer text-center">
            <a class="m-0 small text-primary card-link" href="/admin/aktifitas-akun">View More <i
                    class="fas fa-chevron-right"></i></a>
        </div>
    </div>
</div>