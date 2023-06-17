@extends('layouts.panel')

@section('title', 'Pencarian Materi')

@section('content')
<div class="row mb-4 ml-2">
    <a href="/user/materi" class="btn btn-success">Kembali</a>
</div>
<div class="row">
    <x-card.search-materi-user keyword="{{$search}}" />
</div>
@endsection
