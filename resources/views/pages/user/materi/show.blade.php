@extends('layouts.panel')

@section('title', $title->title_card)

@section('content')
<div class="row mb-3">
    <div class="col-lg-4">
        <x-card.author id="{{$id_card}}" />
    </div>
    <div class="col-lg-8">
        <x-card.materi id="{{$id_card}}" />
    </div>
</div>
<div class="row mb-5">
    <div class="col-lg-10 mx-auto">
        <h5 class="mt-3 mb-4">Komentar</h5>
        <x-card.comment-materi-id id="{{$id_card}}" />
    </div>
</div>
@endsection
