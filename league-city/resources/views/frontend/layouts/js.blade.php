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

</body>

</html>