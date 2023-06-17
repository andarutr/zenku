@extends('layouts.panel')

@section('title', 'Zenku - Ganti Password')

@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Ganti Password</h6>
        </div>
        <div class="card-body">
            <x-form.change-password />
        </div>
    </div>
</div>
@endsection
