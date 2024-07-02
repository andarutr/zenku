@include('sweetalert::alert')
<script src="/auth/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="/auth/dist/js/materialize.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@stack('scripts')
<script>
    $('.tooltipped').tooltip();
    $('#to-recover').on("click", function() {
    $("#loginform").slideUp();
    $("#recoverform").fadeIn();
    });
    $(function() {
    $(".preloader").fadeOut();
    });
</script>