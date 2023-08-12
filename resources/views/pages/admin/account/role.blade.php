@extends('layouts.panel')

@section('title', 'Admin - Role')

@section('content')
<div class="row">
    <div class="col-lg-3 mb-4">
        <div class="card">
            <div class="card-body">
                NOTE : Merubah Role dapat mempengaruhi pemilik akun. Mohon teliti sebelum menambah, memperbarui, dan menghapus role. Terimakasih
            </div>
        </div>
    </div>
    <div class="col-lg-9 mb-4">
        <x-button url="{{ route('admin.role.create') }}" type="primary" text="tambah data" />
        <x-table.role />
    </div>
</div>
@endsection
