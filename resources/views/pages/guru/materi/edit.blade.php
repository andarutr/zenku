@extends('layouts.panel')

@section('title', 'Zenku - Edit Materi')

@push('styles')
<script src="/panel/js/ckeditor/ckeditor.js"></script>
@endpush

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <x-button url="{{ route('guru.materi.index') }}" type="success" text="Kembali" />
        <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Materi</h6>
        </div>
        <div class="card-body">
            <x-form.edit-materi id="{{$id_card}}" />
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