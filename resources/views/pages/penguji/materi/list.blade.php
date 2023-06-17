@extends('layouts.panel')

@section('title', 'Penguji - Materi')

@push('styles')
<link href="/panel/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="row">
    <div class="col-lg-12 mb-4">
        @if(session('message'))
        <div class="col-lg-12">
            <x-alert type="primary" sess="message" />
        </div>
        @endif
        <x-table.materi-list-penguji />
    </div>
</div>
@endsection

@push('scripts')
<!-- Page level plugins -->
<script src="/panel/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/panel/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script>
  $(document).ready(function () {
    $('#dataTable').DataTable(); // ID From dataTable 
    $('#dataTableHover').DataTable(); // ID From dataTable with Hover
  });
</script>
@endpush