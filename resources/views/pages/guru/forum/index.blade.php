@extends('layouts.panel')

@section('title', 'Forum')

@section('content')
<x-button url="{{ route('guru.forum.create')}}" type="primary" text="Buat Diskusi" />
<div class="row mb-3">
    <div class="col-lg-9">
        <x-card.forum-list />
    </div>
    <div class="col-lg-3">
        <x-card.user-online />
    </div>
</div>
@endsection
