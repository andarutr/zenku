@extends('layouts.panel')

@section('title', 'Zenku - Tambah Materi')

@push('styles')
<script src="/panel/js/ckeditor/ckeditor.js"></script>
@endpush

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <x-button url="{{ route('guru.materi.index')}}" type="success" text="Kembali" />
    </div>
    <div class="col-lg-3">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold">Notification</h6>
            </div>
            <div class="card-body">
                <center>
                    <img src="/img/garuda.png" width="150" class="img-fluid rounded mb-3">
                </center>
                <p>Setelah melakukan pembuatan materi, Materi tidak langsung dapat di publish. Harus melalui sistem pengecheckan oleh tim Penguji terlebih dahulu.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Materi</h6>
        </div>
        <div class="card-body">
            <x-form.post-materi />
        </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    CKEDITOR.replace( 'editor1' );
</script>
@endpush