@extends('layouts.panel')

@section('title', 'Komentar kamu!')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-4">
        <x-table.comment-user />
    </div>
</div>
@endsection
