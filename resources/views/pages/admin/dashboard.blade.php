@extends('layouts.panel')

@section('title', 'Admin - Dashboard')

@section('content')
<x-card.static-admin />
  
<div class="row mb-3">
    <!-- Data Siswa Terbaru -->
    <div class="col-xl-8 col-lg-7 mb-4">
        <x-table.new-user />
        <div class="alert alert-success mt-3">
           Silahkan download petunjuk penggunaan akun (Admin) <a href="/zendoc/zenku(admin).pdf" class="badge bg-warning text-white">disini</a>
        </div>
    </div>

    <!-- Aktifitas Akun -->
    <div class="col-xl-4 col-lg-5 ">
        <x-table.new-activity />
    </div>
</div>
<!--Row-->
@endsection
