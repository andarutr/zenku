@extends('layouts.panel')

@section('title', 'Balas Forum')

@push('styles')
<script src="/panel/js/ckeditor/ckeditor.js"></script>
@endpush

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <a href="/guru/forum" class="btn btn-success mb-3">Kembali</a>
        <div class="card">
            <div class="card-body">
                <form action="/guru/forum/balas/{{ $id }}/{{ $url }}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="form-group">
                        <label for="desc">Reply</label>
                        <textarea name="text_forum" id="editor1" rows="10" cols="80">{{ old('text_forum') }}</textarea>
                        @error('text_forum')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
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