@extends('layouts.panel')

@section('title', 'Materi favorit kamu!')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-4">
        <x-table.like-user />
    </div>
</div>
@endsection
