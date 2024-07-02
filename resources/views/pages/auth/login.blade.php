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
                    <!-- email -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="emailForm" type="text" autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <!-- pwd -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="passwordForm" type="password">
                            <label for="password">Password</label>
                        </div>
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
                            <button class="btn-large w100 blue accent-4" id="btnLogin">Login</button>
                        </div>
                    </div>
            </div>
            <div class="center-align m-t-20 db">
                Tidak memiliki akun? <a href="{{ route('register') }}">Daftar!</a><hr/>
                <a href="/zendoc/zenku(authentication).pdf">Petunjuk Login</a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).on("click", "#btnLogin", function(){
    let emailForm = $("#emailForm").val();
    let passwordForm = $("#passwordForm").val();

    axios({
        method: "POST",
        url: "/login",
        data: {
            email: emailForm,
            password: passwordForm
        }
    }).then(function(res){
        let role = res.data.role;

        if(role === 'Admin') {
            window.location.href = "/admin/dashboard";
        } else if(role === 'Guru') {
            window.location.href = "/guru/dashboard";
        } else if(role === 'User') {
            window.location.href = "/user";
        } else {
            window.location.href = "/penguji/dashboard";
        }
    }).catch(function(error){
        swal.fire("error", "Email dan password harus diisi!", "error");
    });
});
</script>
@endpush
