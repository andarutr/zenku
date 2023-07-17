@extends('layouts.panel')

@section('title', 'Penguji - Dashboard')

@section('content')
<x-card.static-penguji />
<div class="row">
    <div class="col-lg-12 mb-3">
        <h3>Materi Terverifikasi Terbaru</h3>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Silahkan download petunjuk penggunaan akun (Penguji) <a href="/zendoc/zenku(penguji).pdf" class="badge bg-warning text-white">disini</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <x-card.new-verif-materi />
</div>
@endsection