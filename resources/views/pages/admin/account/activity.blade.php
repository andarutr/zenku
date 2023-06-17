@extends('layouts.panel')

@section('title', 'Admin - Aktifitas Akun')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        <a href="{{ route('admin.activity.destroy') }}" class="btn btn-danger mb-3" onclick="return confirm('Yakin ingin menghapus semua data aktifitas akun ?')">Delete All</a>
        <x-table.activity-user />
    </div>
</div>
@endsection
