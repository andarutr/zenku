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
                    <!-- name -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="nameForm" type="text" autocomplete="off">
                            <label>Nama Lengkap</label>
                        </div>
                    </div>
                    <!-- email -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="emailForm" type="text" autocomplete="off">
                            <label>Email</label>
                        </div>
                    </div>
                    <!-- pwd -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="passwordForm" type="password" name="password">
                            <label>Password</label>
                        </div>
                    </div>
                    <!-- pwd confirm -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="password" id="confirmPasswordForm">
                            <label>Ulangi Password</label>
                        </div>
                    </div>
                    <div class="row m-t-40">
                        <div class="col s12">
                            <button class="btn-large w100 teal darken-2" id="btnRegister">Daftar</button>
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

@push('scripts')
<script>
$(document).on("click", "#btnRegister", function(){
    let nameForm = $("#nameForm").val();
    let emailForm = $("#emailForm").val();
    let passwordForm = $("#passwordForm").val();
    let confirmPasswordForm = $("#confirmPasswordForm").val();
    
    if(confirmPasswordForm !== passwordForm)
    {
        Swal.fire("error", "Konfirmasi Password harus sama!", "error");
        return;
    }

    axios({
        method: "POST",
        url: "/register",
        data: {
            name: nameForm,
            email: emailForm,
            password: passwordForm
        }
    }).then(function(res){
        Swal.fire("success", "Berhasil membuat akun!", "success");
        $("input").val('');
    }).catch(function(error){
        Swal.fire("error", "Pastikan form sudah terisi semua!", "error");
    });
});
</script>
@endpush