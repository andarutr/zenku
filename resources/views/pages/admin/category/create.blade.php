@extends('layouts.panel')

@section('title', 'Admin - Tambah Kategori')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <x-button url="{{ route('admin.kategori.index') }}" type="success" text="kembali" />
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Kategori</h6>
            </div>
            <div class="card-body">
                <x-form.post-category />
            </div>
        </div>
    </div>
</div>
@endsection