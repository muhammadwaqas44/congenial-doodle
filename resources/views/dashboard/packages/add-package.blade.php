@extends('layout.dashboard.dashboard')

@section('title')
    Add Package
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
                                <h3> Administration::
                                    @if($package != '')
                                        Update Package
                                    @else
                                        Add Package
                                    @endif
                                </h3>
                            </div>

                            <div class="card-body">
                                <form id="add-package-form">
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-12 col-xl-12">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input class="form-control" name="title" type="text"  placeholder="User Name" id="title" required="">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-lg-12">
                                                    @if($package != '')
                                                        <button type="submit" class="btn btn-primary btn-chng1" id="update_package">Update Package</button>
                                                        <input type="hidden" name="id" value="{{$package->id}}">
                                                    @else
                                                        <button type="submit" class="btn btn-primary btn-chng1" id="add_package">Add Package</button>
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
        $(document).ready(function(){

            $('#add_package').on('click', function (e) {
                e.preventDefault();
                var form = $('form#add-package-form').serialize();
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
                    url: "{{route('add-package-post')}}",
                    data: form,
                    success: function (response, status) {
                        if (response.result == 'success') {
                            $.unblockUI();
                            window.toastr.success(response.message);
                            $('#add-package-form')[0].reset();
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
            } );

            // $('#delete').click(function (e) {
            //     e.preventDefault();
            //     var id = $('#deleteid').val();
            //     $.ajax({
            //         type: 'POST',
            //         url: "/admin/service-delete"+id,
            //         success: function (response, status) {
            //             // console.log(response);
            //             // if (response.result == 'success') {
            //             //     window.toastr.success(response.message);
            //             // } else if (response.result == 'error') {
            //             //     window.toastr.error(response.message);
            //             // }
            //         },
            //         error: function (data) {
            //             // $.each(data.responseJSON.errors, function (key, value) {
            //             //     // $.unblockUI();
            //             //     window.toastr.error(value);
            //             // });
            //         }
            //     });
            // })

            @if($package)
            $('#title').val('{{$package->title}}');
            @endif
            $('#update_package').click(function (e) {
                e.preventDefault();
                var form = $('form#add-package-form').serialize();

                $.ajax({
                    type: 'POST',
                    url: "{{route('edit-package-post')}}",
                    data: form,
                    success: function (response, status) {
                        console.log(response);
                        if (response.result == 'success') {
                            window.toastr.success(response.message);
                        } else if (response.result == 'error') {
                            window.toastr.error(response.message);
                        }
                    },
                    error: function (data) {
                        $.each(data.responseJSON.errors, function (key, value) {
                            // $.unblockUI();
                            window.toastr.error(value);
                        });
                    }
                });
            });
        });

    </script>

@endsection





