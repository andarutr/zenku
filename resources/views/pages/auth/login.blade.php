@extends('layouts.auth')

@section('title','Login')

@section('content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url('/auth/img/bg-login.jpg') no-repeat center center;">
    <div class="auth-box">
        <div id="loginform">
            <div class="logo">
                <span class="db m-b-10"><img src="/img/zenku.png" alt="logo" width="150" /></span>
                <h5 class="font-medium m-b-20">Silahkan Login</h5>
            </div>
            <!-- Form -->
            <div class="row">
                <form class="col s12" action="{{ route('login') }}" method="POST">@csrf
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
                    <!-- pwd -->
                    <div class="row m-t-5">
                        <div class="col s7">
                            <label>
                                <input type="checkbox"/>
                                <span>Remember Me?</span>
                            </label>
                        </div>
                        <div class="col s5 right-align"><a href="/forgot-password" class="link" id="to-recover">Lupa Password?</a></div>
                    </div>
                    <!-- pwd -->
                    <div class="row m-t-40">
                        <div class="col s12">
                            <button class="btn-large w100 blue accent-4" type="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="center-align m-t-20 db">
                Tidak memiliki akun? <a href="{{ route('register') }}">Daftar!</a><hr/>
                <a href="/zendoc/zenku(authentication).pdf">Petunjuk Login</a>
            </div>
        </div>
    </div>
</div>
@endsection
