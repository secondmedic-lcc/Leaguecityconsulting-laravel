<script src="{{ asset('includes-frontend'); }}/js/jquery.min.js"></script>
<script src="{{ asset('includes-frontend'); }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('includes-frontend'); }}/js/owl.carousel.js"></script>
<script src="{{ asset('includes-frontend'); }}/js/custom.js"></script>


@if (session('success') != '')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal("Thank you!", "{{ session('success') }}", "success");
</script>
@endif

<script>
    $(".industries .box").hover(function() {
        let imageName = $(this).attr('id');
        if (imageName != undefined) {
            $(".industries").css("background-image", `url({{ asset('includes-frontend'); }}/images/${imageName}.webp)`);
            $(".industries .box").removeClass('active');
            $(this).addClass('active');
        }
    });
</script>

</body>

</html>