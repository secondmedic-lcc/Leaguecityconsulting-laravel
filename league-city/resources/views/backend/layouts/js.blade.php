<script src="{{ asset('includes-backend/js/select2.min.js'); }}"></script>

<script src="{{ asset('includes-backend/js/unitegallery.min.js'); }}"></script>

<script src="{{ asset('includes-backend/js/ug-theme-tilesgrid.js'); }}"></script>

<script src="{{ asset('includes-backend/js/owl.carousel.js'); }}"></script>

<script src="{{ asset('includes-backend/js/apexcharts.min.js'); }}"></script>

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css">

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script src="{{ asset('includes-backend/js/second-medic.js'); }}"></script>
<script language="JavaScript" src="{{ asset('includes-backend/js/jquery.dataTables.min.js'); }}" type="text/javascript"></script>
<script language="JavaScript" src="{{ asset('includes-backend/js/dataTables.bootstrap.min.js'); }}" type="text/javascript"></script>
<script language="JavaScript" src="{{ asset('includes-backend/js/dataTables.responsive.min.js'); }}" type="text/javascript"></script>

<script language="JavaScript" src="{{ asset('includes-backend/js/responsive.bootstrap.min.js'); }}" type="text/javascript"></script>


@if(@$current_page == "leads")
<script>
    $('.btn-view').click(function() {
        var message = $(this).attr('message');
        $('#viewModel #title').text("Message");
        $('#viewModel #message').text(message);
    });
</script>
@endif


@if(@$current_page == "package-request" || @$current_page == "campaign")
<script>
    function showMessage(message){
        $('#viewModel #title').text("Message");
        $('#viewModel #message').text(message);
    };
</script>
@endif


@if(@$current_page == "customers")
<script>
    $('#country').change(function() {
        var country_id = $(this).val();
        $.ajax({
            url: "{{ url('state'); }}/" + country_id,
            method: "GET",
            success: function(result) {
                data = "<option value='' selected disabled >Select State</option>";
                result.forEach(function(result, index) {
                    data += "<option value='" + result.state_id + "'>" + result.name + "</option>";
                });
                $('#state').html(data);
            },
        });
    });

    $('#state').change(function() {
        var state_id = $(this).val();
        $.ajax({
            url: "{{ url('city'); }}/" + state_id,
            method: "GET",
            success: function(result) {
                data = "<option value='' selected disabled >Select City</option>";
                result.forEach(function(result, index) {
                    data += "<option value='" + result.city_id + "'>" + result.name + "</option>";
                });
                $('#city').html(data);
            }
        });
    });
</script>
@endif


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    /* $('.btn-delete').click(function() {
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
    }); */

    function deleteData(url) {
        swal({
            title: "Are you sure?",
            text: "Are you sure to delete this data",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                window.location.href = url;
                return true;
            } else {
                return false;
            }
        });
    }
</script>

@if(@$current_page == "portfolio" || @$current_page == "blogs" || @$current_page == "products" || @$current_page == "industry" || @$current_page == "website-banner" || @$current_page == "package-includes" || @$current_page == "category" || @$current_page == "services")
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

@if(@$current_page == "portfolio" || @$current_page == "blogs" || @$current_page == "about-us")
<script>
      CKEDITOR.replace("description"); 
   /* $(function() {
        $("#description").summernote({
            height: "200px"
        });
    });*/
</script>
@endif

@if(@$current_page == "services")
<script>
     CKEDITOR.replace("description"); 
    CKEDITOR.replace("sub_heading"); 

    /*$(function() {
        $("#description").summernote({
            height: "200px"
        });
    });
    $(function() {
        $("#sub_heading").summernote({
            height: "200px"
        });
    });*/
</script>
@endif

@if(@$current_page == "seo-data" || @$current_page == "blogs" || @$current_page == "portfolio" || @$current_page == "products" || @$current_page == "industry")
<script>
    CKEDITOR.replace("meta_description"); 
</script>
@endif

@if(@$current_page == "portfolio" || @$current_page == "blogs")
<script>
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


@if(@$current_page == "packages")
<script>
    function addKeyPoints() {

        $('.key_points').append('<div class="row mt-2"><div class="col-md-10"><input type="text" name="key_point[]" class="form-control p-2 text-dark" /></div><div class="col-md-2"> <button type="button" class="btn btn-danger  w-100"  onclick="deleteParentWorking(this)"><i class="fa fa-trash"></i></button> </div></div> </div>');
    }

    function deleteParentWorking(n) {
        n.parentNode.parentNode.parentNode.removeChild(n.parentNode.parentNode);
    }
</script>
@endif




@if(@$current_page == "package-types")
<script>
    $('#package_name').change(function(e) {

        var slug = $(this).val();

        var name = slug.toLowerCase().trim();

        $('#package_slug').val(name.replace(/\s+/g, '-'));
    });
</script>
@endif


@if(@$current_page == "portfolio")
<script>
    $('.btn-edit').click(function(e) {

        let data = $(this);

        let heading = data.attr('heading');
        $('#heading').val(heading);

        let description = data.attr('description');
        $('#port-description').val(description);

        $('#images').removeAttr('required');

        let action = data.attr('serviceId');

        $('#portfolio-form').attr('action', `{{ url('/admin/portfolio-images/'); }}/` + action);

    });
</script>
@endif

@if(@$current_page == "services")
<script>
    $('.btn-edit').click(function(e) {

        let data = $(this);

        let heading = data.attr('heading');
        $('#heading').val(heading);

        let description = data.attr('description');
        $('#port-description').val(description);

        let projrct_url = data.attr('projrct_url');
        $('#project_url').val(projrct_url);

        $('#images').removeAttr('required');

        let action = data.attr('serviceId');

        $('#services-form').attr('action', `{{ url('/admin/services-images/'); }}/` + action);

    });
</script>
@endif



@if(@$current_page == "campaign")
<script>
    $('.btn-edit').click(function(e) {

        let campaign_id = $(this).attr('campaign_id');
        let request_status = $(this).attr('request_status');
        let remark = $(this).attr('remark');

        $('#editModel #campaign_id').val(campaign_id);
        $('#editModel #request_status').val(request_status);
        $('#editModel #remark').val(remark);

    });
</script>
@endif

</body>

</html>