@extends('layouts.panel')

@section('title', 'Forum')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <x-button url="{{ route('user.forum.index')}}" type="success" text="Kembali" />
        <x-card.forum-detail url="{{$url_forum}}" />
    </div>
</div>
@endsection
