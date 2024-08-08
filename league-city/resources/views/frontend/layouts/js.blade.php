<script src="{{ asset('includes-frontend'); }}/js/jquery.min.js"></script>
<script src="{{ asset('includes-frontend'); }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('includes-frontend'); }}/js/owl.carousel.js"></script>
<script src="{{ asset('includes-frontend'); }}/js/aos.js"></script>
<script src="{{ asset('includes-frontend'); }}/js/custom.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


@if(session('success') != '')
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
    function copyUrl() {

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

<!--
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('contact-form');
        var submitButton = document.getElementById('contact-btn');

        form.addEventListener('submit', function() {
            submitButton.disabled = true;
            submitButton.innerHTML = 'Submitting...';
        });
    });
</script> -->



@if(@$current_page == "package-type")
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('.btn-form').click(function(e) {

        let packageName = $(this).attr('packageName');
        let formattedPackageName = packageName.charAt(0).toUpperCase() + packageName.slice(1);

        $('#packageName').text(formattedPackageName);
        $('#plan_name').val(formattedPackageName);

        let packageType = $(this).attr('packageType');

        $('#packageType').text(packageType);
        $('#package_type').val(packageType);

        let packageInr = $(this).attr('packageInr');

        $('#packageInr').text(packageInr);

        let packageUsd = $(this).attr('packageUsd');

        $('#packageUsd').text(packageUsd);

    });

    $('.plan-request').on('submit', function(e) {
        e.preventDefault();
        const button = document.querySelector("button[type=submit]");
        button.setAttribute("disabled", true);
        const form = document.querySelector('form');
        var data = new FormData(form);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', "{{ url('api/packages/store'); }}");
        xhr.send(data);
        xhr.onerror = () => {
            swal("Error!", "Network Error", "error");
        };
        xhr.onload = (new_res) => {

            let response_new = xhr.responseText;
            let result = JSON.parse(response_new);
            console.log(result.msg);
            if (xhr.readyState === 4 && xhr.status === 200 && result.success == true) {

                swal(
                    "Thank You!",
                    "Thank you for your Request",
                    "success"
                );

                button.removeAttribute("disabled");
                form.reset();
                $('.modal').modal('hide');

            } else {
                swal("Error!", result.error, "error");
                button.removeAttribute("disabled");
            }
        };
    });


    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('myPlanForm');
        var submitButton = document.getElementById('plan-form-btn');

        form.addEventListener('submit', function() {
            submitButton.disabled = true;
            submitButton.innerHTML = 'Submitting...';
        });
    });
</script>
@endif

@if($current_page == 'portfolio')
<script>
    $('.portfolio-filter').click(function(e) {

        var category = $(this).attr('category');
        $('.portfolio-filter').removeClass('active');
        $('#category-' + category).addClass('active');

        if (category == 'all') {
            $('.portfolio-view').removeClass('d-none');
        } else {
            $('.portfolio-view').addClass('d-none');
            $('.portfolio-view-' + category).removeClass('d-none');
            $('.portfolio-view-' + category).addClass('fadeeffect');
        }

        setTimeout(() => {
            $('.portfolio-view').removeClass('fadeeffect');
        }, 500);
    });
</script>
@endif



@if($current_page == 'saas-campaign')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('campaign-form');
        var submitButton = document.getElementById('campaign-btn');

        form.addEventListener('submit', function() {
            submitButton.disabled = true;
            submitButton.innerHTML = 'Submitting...';
        });
    });
</script>
@endif

<script>
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();

        const submitButton = document.getElementById('contact-btn');

        submitButton.setAttribute("disabled", true);
        const form = document.querySelector('form');
        var data = new FormData(form);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', "{{ route('contact-us.request'); }}");
        xhr.send(data);
        xhr.onerror = () => {
            swal("Error!", "Network Error", "error");
        };
        xhr.onload = (new_res) => {

            let response_new = xhr.responseText;
            let result = JSON.parse(response_new);
          
            if (xhr.readyState === 4 && xhr.status === 200 && result.status == true) {

                swal(
                    "Thank You!",
                    "Thank you for your Request",
                    "success"
                );

                submitButton.removeAttribute("disabled");
                form.reset();
                $('.modal').modal('hide');

            } else {
                const errors = result.error;
                
                let errorMessage = '';
                for (const field in errors) {
                    if (errors.hasOwnProperty(field) && errors[field].length > 0) {
                    errorMessage = errors[field][0];
                    break;
                    }
                }
                
                swal("Error!", errorMessage, "error");
                submitButton.removeAttribute("disabled");
            }
        };
    });
</script>

</body>

</html>