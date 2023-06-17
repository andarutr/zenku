@extends('layouts.panel')

@section('title', 'Admin - Ganti Password')

@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Ganti Password</h6>
        </div>
        <div class="card-body">
            <form action="/admin/ganti-password/akun/{{ $user->id }}" method="POST">@csrf
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" value="{{ $user->name}}" readonly>
                </div>
                <div class="form-group">
                    <label for="new_password">Password Baru</label>
                    <input type="password" class="form-control" name="new_password" id="new_password">
                    @error('new_password')<p class="text-danger">{{ $message }}</p>@enderror
                </div>
                <button type="submit" class="btn btn-success">Perbarui</button>
            </form>
        </div>
    </div>
</div>
@endsection
