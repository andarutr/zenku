@extends('layouts.panel')

@section('title', 'Forum')

@push('styles')
<script src="/panel/js/ckeditor/ckeditor.js"></script>
@endpush

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <x-button url="{{ route('user.forum.index')}}" type="success" text="Kembali" />
        <div class="card">
            <div class="card-body">
                <x-form.post-forum />
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