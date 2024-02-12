
<script src="{{ asset('includes-backend/js/select2.min.js'); }}"></script>

<script src="{{ asset('includes-backend/js/unitegallery.min.js'); }}"></script>

<script src="{{ asset('includes-backend/js/ug-theme-tilesgrid.js'); }}"></script>

<script src="{{ asset('includes-backend/js/owl.carousel.js'); }}"></script>

<script src="{{ asset('includes-backend/js/apexcharts.min.js'); }}"></script>

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

<script src="{{ asset('includes-backend/js/second-medic.js'); }}"></script>


@if(@$current_page == "leads")
<script>
    $('.btn-view').click(function(){
        var message = $(this).attr('message');
        $('#modal-title').text("Contact Request Message");
        $('#modal-message').text(message);
    });
</script>
@endif


@if(@$current_page == "customers")
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

@if(@$current_page == "portfolio" || @$current_page == "blogs" || @$current_page == "products" || @$current_page == "industry" || @$current_page == "website-banner")
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img_preview').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endif

@if(@$current_page == "portfolio" || @$current_page == "blogs" || @$current_page == "products")
    <script>
        CKEDITOR.replace("description");
    </script>
@endif


@if(@$current_page == "seo-data" || @$current_page == "blogs" || @$current_page == "portfolio" || @$current_page == "products" || @$current_page == "industry")
    <script>
        CKEDITOR.replace("meta_description");
    </script>
@endif

@if(@$current_page == "portfolio" || @$current_page == "blogs")
    <script>
        
        CKEDITOR.replace("description");

        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img_preview2').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endif


</body>
</html>