@extends('layouts.panel')

@section('title', 'Kumpulan like')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-4">
        <x-table.like-list />
    </div>
</div>
@endsection
