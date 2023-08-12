@extends('layouts.panel')

@section('title', 'Home')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="mb-3">Materi Terbaru</h3>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Silahkan download petunjuk penggunaan akun (User) <a href="/zendoc/zenku(user).pdf" class="badge bg-warning text-white">disini</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <x-card.verif-materi-user />
</div>
@endsection
