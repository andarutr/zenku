@extends('layouts.panel')

@section('title', 'Admin - Aktifitas Akun')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        <form action="{{ route('admin.aktifitas-akun.destroy', 1) }}" method="POST">@csrf @method('delete')
            <button class="btn btn-danger mb-3" onclick="return confirm('Yakin ingin menghapus semua data aktifitas akun ?')">Delete All</button>
        </form>
        <x-table.activity-user />
    </div>
</div>
@endsection
