@extends('layouts.panel')

@section('title', 'Guru - Show Komentar')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <x-button url="/guru/komentar" type="success" text="Kembali" />
    </div>    
    <div class="col-lg-4">
        <x-card.comment-user id="{{$id_comment}}" />
    </div>
    <div class="col-lg-8">
        <x-card.comment-detail id="{{$id_comment}}" />
    </div>
</div>
@endsection
