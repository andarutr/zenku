@extends('layouts.panel')

@section('title', 'Admin - Show Materi')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <x-button url="{{ route('admin.materi.index') }}" type="success" text="Kembali" />
    </div>    
    <div class="col-lg-4">
        <x-card.author id="{{$id_card}}" />
    </div>
    <div class="col-lg-8">
        <x-card.materi id="{{$id_card}}" />
    </div>
</div>
@endsection
