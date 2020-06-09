@extends('layout.dashboard.dashboard')

@section('title')
    @if($subbrand != '')
        Update Sub Brand
    @else
        Add Sub Brand
    @endif
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
                                <h3>
                                    @if($subbrand != '')
                                        Update Sub Brand
                                    @else
                                        Add Sub Brand
                                    @endif
                                </h3>
                            </div>

                            <div class="card-body">
                                <form id="add_sub_brand">
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-12 col-xl-12">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Sub Brand Name</label>
                                                        <input class="form-control" name="sub_brand" type="text"
                                                               placeholder="Sub Brand Name" id="sub_brand" required="">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-12">
                                                    @if($subbrand != '')
                                                        <button type="submit" class="btn btn-primary btn-chng1"
                                                                id="update_sub">Update Sub Brand
                                                        </button>
                                                        <input type="hidden" name="id" value="{{$subbrand->id}}">
                                                    @else
                                                        <button type="submit" class="btn btn-primary btn-chng1"
                                                                id="add_sub">Add Sub Brand
                                                        </button>
                                                    @endif
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
        $('#add_sub').click(function (e) {
            e.preventDefault();
            var form = $('form#add_sub_brand').serialize();

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
                url: "{{route('add-sub-brand-post')}}",
                data: form,
                success: function (response, status) {
                    if (response.result == 'success') {
                        $.unblockUI();
                        window.toastr.success(response.message);
                        setTimeout(function () {
                            window.location.href= "{{route('subBrandListing')}}";
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
        $(document).ready(function () {


            @if($subbrand)
            $('#sub_brand').val('{{$subbrand->sub_brand}}');
            @endif
            $('#update_sub').click(function (e) {
                e.preventDefault();
                var form = $('form#add_sub_brand').serialize();
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
                    url: "{{route('edit-sub-brand-post')}}",
                    data: form,
                    success: function (response, status) {
                        if (response.result == 'success') {
                            $.unblockUI();
                            window.toastr.success(response.message);
                            setTimeout(function () {
                                window.location.href= "{{route('subBrandListing')}}";
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
        });

    </script>

@endsection





