@extends('layouts.panel')

@section('title', 'Materi')

@section('content')
<div class="row mb-4">
    <form action="{{ route('user.materi.search') }}" class="form-inline" method="GET">
        <div class="col-lg-6">
            <input type="text" class="form-control" name="search" placeholder="Cari Materi...">
        </div>
    </form>
</div>
<div class="row">
    <x-card.materi-id-user id="{{$id}}" />
</div>
@endsection
