@extends('layouts.auth')

@section('title','Register')

@section('content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url('/auth/img/bg-login.jpg') no-repeat center center;">
    <div class="auth-box">
        <div id="loginform">
            <div class="logo">
                <span class="db m-b-10"><img src="/img/zenku.png" alt="logo" width="150" /></span>
                <h5 class="font-medium m-b-20">Pendaftaran Akun</h5>
            </div>
            <!-- Form -->
            <div class="row">
                <form class="col s12" action="{{ route('register') }}" method="POST">@csrf
                    <!-- name -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" autocomplete="off">
                            <label for="name">Nama Lengkap</label>
                        </div>
                        @error('name')<p class="red-text text-darken-2">{{ $message }}</p>@enderror
                    </div>
                    <!-- email -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="text" class="validate" name="email" value="{{ old('email') }}" autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                        @error('email')<p class="red-text text-darken-2">{{ $message }}</p>@enderror
                    </div>
                    <!-- pwd -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" name="password">
                            <label for="password">Password</label>
                        </div>
                        @error('password')<p class="red-text text-darken-2">{{ $message }}</p>@enderror
                    </div>
                    <!-- pwd confirm -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password_confirmation" type="password" class="validate" name="password_confirmation">
                            <label for="password_confirmation">Ulangi Password</label>
                        </div>
                        @error('password_confirmation')<p class="red-text text-darken-2">{{ $message }}</p>@enderror
                    </div>
                    <div class="row m-t-40">
                        <div class="col s12">
                            <button class="btn-large w100 teal darken-2" type="submit">Daftar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="center-align m-t-20 db">
                Sudah memiliki akun? <a href="{{ route('login') }}">Login!</a><hr/>
                <a href="/zendoc/zenku(authentication).pdf">Petunjuk Pendaftaran</a>
            </div>
        </div>
    </div>
</div>
@endsection