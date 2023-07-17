@extends('layouts.panel')

@section('title', 'Guru - Dashboard')

@section('content')
<x-card.static-guru />
<div class="row">
    <div class="col-lg-12 mb-3">
        <h3>Materi Terbaru</h3>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Silahkan download petunjuk penggunaan akun (Guru) <a href="/zendoc/zenku(guru).pdf" class="badge bg-warning text-white">disini</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <x-card.new-materi-id />
</div>
@endsection