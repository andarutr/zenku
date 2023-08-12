@extends('layouts.panel')

@section('title', 'User - Perbarui Komentar')

@section('content')
<div class="col-lg-12">
    <x-button url="{{ route('user.comment.index') }}" type="success" text="Kembali" />
    <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Update Komentar</h6>
    </div>
    <div class="card-body">
        <x-form.edit-comment-user id="{{$id_comment}}" />
    </div>
    </div>
</div>
@endsection
