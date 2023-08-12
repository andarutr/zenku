@extends('layouts.panel')

@section('title', 'Admin - Perbarui Role')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <a href="/admin/role" class="btn btn-success mb-3">Kembali</a>
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Edit Menu</h6>
            </div>
            <div class="card-body">
                <x-form.edit-role id="{{$id_role}}" />
            </div>
        </div>
    </div>
</div>
@endsection