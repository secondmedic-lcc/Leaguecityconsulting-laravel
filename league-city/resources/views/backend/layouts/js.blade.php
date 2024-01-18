
<script src="{{ asset('includes-backend/js/select2.min.js'); }}"></script>

<script src="{{ asset('includes-backend/js/unitegallery.min.js'); }}"></script>

<script src="{{ asset('includes-backend/js/ug-theme-tilesgrid.js'); }}"></script>

<script src="{{ asset('includes-backend/js/owl.carousel.js'); }}"></script>

<script src="{{ asset('includes-backend/js/apexcharts.min.js'); }}"></script>

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

<script src="{{ asset('includes-backend/js/second-medic.js'); }}"></script>


@if(@$current_page == "service-provider")
<script>
    $('#partner_type').change(function(){
        var partner_type = $(this).val();
        var partner_code = $("#partner_type option:selected").attr('code');
        $('#user_type').text(partner_code);
        $('#code').val(partner_code);
    });

    $('#owner_contact').change(function(){
        var owner_contact = $(this).val();
        var random = Math.floor(1000 + Math.random() * 9000);
        $("#business_id").val(owner_contact.substr(0, 8)+random);
    });
</script>
@endif


@if(@$current_page == "service-provider" || @$current_page == "customers" || @$current_page == "doctors" || @$current_page == "homecare-nurse" || @$current_page == "pharmacy-register")
<script>
    $('#country').change(function(){
        var country_id = $(this).val();
        $.ajax({
            url: "{{ url('state'); }}/"+country_id,
            method: "GET",
            success: function(result){
                data = "<option value='' selected disabled >Select State</option>";
                result.forEach(function(result, index){
                    data += "<option value='"+result.state_id+"'>"+result.name+"</option>";
                });
                $('#state').html(data);
            },
        });
    });

    $('#state').change(function(){
        var state_id = $(this).val();
        $.ajax({
            url: "{{ url('city'); }}/"+state_id,
            method: "GET",
            success: function(result){
                data = "<option value='' selected disabled >Select City</option>";
                result.forEach(function(result, index){
                    data += "<option value='"+result.city_id+"'>"+result.name+"</option>";
                });
                $('#city').html(data);
            }
        });
    });
</script>
@endif

@if(@$current_page == "doctors" || @$current_page == "homecare-nurse")
<script>
    $('#user_dob').change(function(){
        var dob = new Date($(this).val());
        var month_diff = Date.now() - dob.getTime();
        var age_dt = new Date(month_diff); 
        var year = age_dt.getUTCFullYear();
        var age = Math.abs(year - 1970);
        $('#user_age').val(age);
    });
</script>
@endif


@if(@$current_page == "doctors" || @$current_page == "labs" || @$current_page == "labs-category" || @$current_page == "labs-package" || @$current_page == "homecare-nurse" || @$current_page == "sp-website-control" || @$current_page == "labs-tests" || @$current_page == "pharmacy-register")
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img_preview').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endif

@if(@$current_page == "doctors" || @$current_page == "sp-website-control")
<script>
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img_preview2').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endif


@if(@$current_page == "labs")
<script>
    $('#lab_name').change(function(e){

        var lab_name = $(this).val();

        var name = lab_name.toLowerCase().trim();

        $('#lab_route_name').val(name.replace(/\s+/g, '-'));
    });
</script>
@endif



@if(@$current_page == "labs-package")
<script>
    
    CKEDITOR.replace("package_description");

    $('#package_category').change(function(){
        var category = $(this).val();
        $.ajax({
            url: "{{ url('package-sub-category'); }}/"+category,
            method: "GET",
            success: function(result){
                console.log(result);
                data = "<option value='' selected disabled >Select Sub Category</option>";
                result.forEach(function(result, index){
                    data += "<option value='"+result.id+"'>"+result.category_name+"</option>";
                });
                $('#package_sub_category').html(data);
            },
        });
    });
</script>
@endif



@if(@$current_page == "sp-website-control")
<script>
    CKEDITOR.replace("about_us");
</script>
@endif

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('.btn-delete').click(function(){
        swal({
        title: "Are you sure?",
            text: "Are you sure to delete this data",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                var url = $(this).attr('url');
                window.location.href = url;
                return true;
            } else {
                return false;
            }
        });
    });
</script>



@if(@$current_page == "leads")
    <script>
        $('.service_details_change').change(function(){
            
            var attr_name = $(this).attr('name');
            
            var attr_value = $(this).val();

            var id = $(this).attr('id');

            var url = "{{ url('admin/homecare-details-update'); }}/"+id;

            $.ajax({
                url: url,
                method: "POST",
                data: {attr_name: attr_name, attr_value: attr_value, _token: "{{ csrf_token() }}" },
                success: function(result){
                  console.log('success');
                },
            });
        });
    </script>
@endif


@if(@$current_page == "pharmacy-register" || @$current_page == "service-provider")
<script>
     
    getLocation(); 

    function getLocation(){
        if (navigator.geolocation) {
            return navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            return { latitude: "", longitude: "" }
        }
    }

    function showPosition(position) {

        $('#latitude').val(position.coords.latitude);
        $('#longitude').val(position.coords.longitude);

        /* getStateCityAddress(position.coords.latitude,position.coords.longitude); */
    }

    function getStateCityAddress(lat, long) {
        
        let secmed_key = "15b1773112mshe6bfd41bb8a49cbp16f88ajsn18ef719b185a";
        let config = {
            method: 'get',
            maxBodyLength: Infinity,
            url: `https://trueway-geocoding.p.rapidapi.com/ReverseGeocode`,
            headers: {
                'X-RapidAPI-Key': secmed_key,
                'X-RapidAPI-Host': 'trueway-geocoding.p.rapidapi.com'
            },
            params: {
                location: `${lat},${long}`,
                language: 'en'
            },
        };

        /* fetch("https://trueway-geocoding.p.rapidapi.com/ReverseGeocode", {
            method: 'get',
            headers: {
                'X-RapidAPI-Key': secmed_key,
                'X-RapidAPI-Host': 'trueway-geocoding.p.rapidapi.com'
            },
            body: JSON.stringify({
                location: `${lat},${long}`,
                language: 'en'
            }),
        }).then(response => {
    
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        }); */
    }
</script>
@endif

</body>
</html>