@extends('layouts.panel')

@section('title', 'Zenku - Memperbarui Account')

@section('content')
<div class="row mb-3">
    <div class="col-lg-10">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Memperbarui Account</h6>
            </div>
            <div class="card-body">
                <x-form.edit-account id="{{$id}}" />
            </div>
        </div>
    </div>
</div>
@endsection