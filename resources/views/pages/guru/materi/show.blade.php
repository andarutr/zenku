@extends('layouts.panel')

@section('title', 'Zenku - Show Materi')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <x-button url="{{ route('guru.materi.index')}}" type="success" text="Kembali" />
        <x-card.show-materi-id id="{{$id_card}}" />
    </div>
</div>
@endsection
