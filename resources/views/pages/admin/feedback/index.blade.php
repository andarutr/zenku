@extends('layouts.panel')

@section('title', 'Kumpulan Feedback')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-4">
        <a href="{{ route('admin.feedback.destroy_all', 1) }}" class="btn btn-danger mb-3" onclick="return confirm('Yakin ingin menghapus semua data feedback ?')">Delete All</a>
        <x-table.feedback-list />
    </div>
</div>
@endsection
