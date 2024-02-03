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

@if($current_page == 'blogs-details')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('myForm');
        var submitButton = document.getElementById('form-btn');

        form.addEventListener('submit', function() {
            submitButton.disabled = true;
            submitButton.innerHTML = 'Submitting...';
        });
    });
</script>

<script>
    function copyUrl(){

        var currentUrl = window.location.href;
        var tempInput = $('<input>');
        $('body').append(tempInput);
        tempInput.val(currentUrl).select();
        document.execCommand('copy');
        tempInput.remove();
        
        swal("Thank you!", "Url Copyed Successfully", "success");
    }
</script>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('contact-form');
        var submitButton = document.getElementById('contact-btn');

        form.addEventListener('submit', function() {
            submitButton.disabled = true;
            submitButton.innerHTML = 'Submitting...';
        });
    });
</script>


</body>

</html>