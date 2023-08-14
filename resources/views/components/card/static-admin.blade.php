<div class="row mb-3">
    <!-- Jumlah Guru -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">GURU 
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $guru_count }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-graduation-cap fa-2x text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumlah Siswa -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">SISWA</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $siswa_count }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumlah Penguji -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">PENGUJI</div>
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $penguji_count }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-tie fa-2x text-info"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumlah Materi -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">MATERI
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $card_count }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>