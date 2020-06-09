@extends('layout.editor-layout.dashboard')

@section('title')
    Add Picture
@endsection

@section('content')
    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Dashboard</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3> Add Picture</h3>
                            </div>

                            <div class="card-body">
                                <form id="add-photo-form" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="schedule_id" value="{{$id}}">

                                    <div class="row">

                                        <div class="col-lg-12 col-xl-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label> Image </label>
                                                        <input type="file" class="form-control" name="profile_image" accept="image/*" id="profile_image" onchange="uploadFile(this,this.id)"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label> Title </label>
                                                        <input type="text" class="form-control" name="title"
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <select name="category" class="form-control" >
                                                            <option value="" selected>Select</option>
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Photo Type</label>
                                                        <select name="photo_type" class="form-control" >
                                                            <option value="Receipt" selected>Receipt</option>
                                                            <option value="Environment">Environmental</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label> Note</label>
                                                        <textarea class="form-control" name="notes" id="your_textarea"
                                                                  cols="60"
                                                                  rows="8"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-primary btn-chng1">Add
                                                        Picture
                                                    </button>
                                                    <input type="hidden" name="schedule_id" value="{{$id}}">

                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                </form>

                            </div>
                            <!-- end card-body -->

                        </div>
                        <!-- end card -->

                    </div>
                    <!-- end col -->

                </div>
            </div>
            <!-- END container-fluid -->

        </div>
        <!-- END content -->

    </div>
@endsection

@section('script')
    <script>
        function uploadFile(input,id) {
            if (input.files && input.files[0]) {
                var fileName = input.files[0].name;
                var filesize = input.files[0].size;
                var extention = fileName.split('.').pop().toLowerCase();
                if(extention == 'png' || extention == 'jpg' || extention == 'jpeg')
                {
                    console.log(filesize);
                    if (filesize < 5300000){

                    }else{
                        $('#'+id).val('');
                        window.toastr.error("Please upload a file less then 5MB");
                    }
                }else{
                    $('#'+id).val('');
                    window.toastr.error("Please upload only png/jpg/jpeg or pdf file");
                }
            }
        }
    </script>
    <script>

        $('form#add-photo-form').on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.blockUI({
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{route('add-picture-post-editor')}}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (response, status) {
                    if (response.result == 'success') {
                        $.unblockUI();
                        window.toastr.success(response.message);
                        setTimeout(function () {
                            window.location.href = '{{route('visit-detail-consultant',$id)}}';
                        }, 1000);
                    } else if (response.result == 'error') {
                        $.unblockUI();
                        window.toastr.error(response.message);
                    }
                },
                error: function (data) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $.unblockUI();
                        window.toastr.error(value);
                    });
                }
            });



        });
    </script>
@endsection
