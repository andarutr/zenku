@extends('layouts.panel')

@section('title', 'Zenku - Forum')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <x-button url="{{ route('user.forum.create')}}" type="primary" text="Buat Diskusi" />
        <x-card.forum-list />
    </div>
</div>
@endsection
