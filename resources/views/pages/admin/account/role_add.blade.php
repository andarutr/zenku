@extends('layouts.panel')

@section('title', 'Admin - Tambah Role')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <x-button url="{{ route('admin.role.index') }}" type="success" text="kembali" />
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Menu</h6>
            </div>
            <div class="card-body">
                <x-form.post-role />
            </div>
        </div>
    </div>
</div>
@endsection