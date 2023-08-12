@extends('layouts.auth')

@section('title','Reset Password')

@section('content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(/app/assets/images/big/auth-bg.jpg) no-repeat center center;">
    <div class="auth-box">
        <div id="loginform">
            <div class="logo">
                <span class="db m-b-10"><img src="/img/zenku.png" alt="logo" width="150" /></span>
                <h5 class="font-medium m-b-20">Reset Password</h5>
            </div>
            <!-- Form -->
            <div class="row">
                <form class="col s12" action="{{ route('password.update') }}" method="POST">@csrf
                    <!-- email -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="text" class="validate" name="email" value="{{ $request->email }}">
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
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password_confirmation" type="password" class="validate" name="password_confirmation">
                            <label for="password_confirmation">Password</label>
                        </div>
                        @error('password_confirmation')<p class="red-text text-darken-2">{{ $message }}</p>@enderror
                    </div>
                    <!-- pwd -->
                    <div class="row m-t-40">
                        <div class="col s12">
                            <button class="btn-large w100 teal darken-2" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection