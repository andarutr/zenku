@extends('layouts.panel')

@section('title', 'Penguji - Show Materi')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <x-button url="/penguji/materi" type="success" text="Kembali" />
    </div>    
    <div class="col-lg-4">
        <x-card.author id="{{$id_card}}" />
    </div>
    <div class="col-lg-8">
        <x-card.show-materi-id id="{{$id_card}}" />
    </div>
</div>
@endsection
