@extends('layouts.auth')

@section('title','Forgot Password')

@section('content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(/app/assets/images/big/auth-bg.jpg) no-repeat center center;">
    <div class="auth-box">
        <div id="loginform">
            <div class="logo">
                <span class="db m-b-10"><img src="/img/zenku.png" alt="logo" width="150" /></span>
                <h5 class="font-medium m-b-20">Temukan Akun Anda!</h5>
                <p>Masukkan email kamu untuk melakukan reset password. Periksa email untuk mendapatkan link reset password!</p>
            </div>
            <!-- Form -->
            <div class="row">
                <form class="col s12" action="{{ route('password.email') }}" method="POST">@csrf
                    <!-- email -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="text" class="validate" name="email">
                            <label for="email">Email</label>
                        </div>
                        @error('email')<p class="red-text text-darken-2">{{ $message }}</p>@enderror
                    </div>
                    <div class="row m-t-40 m-b-20">
                        <div class="col s12">
                            <button class="btn-large w100 blue accent-4" type="submit">Dapatkan Link</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection