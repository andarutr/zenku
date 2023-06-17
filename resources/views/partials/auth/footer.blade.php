@include('sweetalert::alert')
<script src="/auth/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="/auth/dist/js/materialize.min.js"></script>
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