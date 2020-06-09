@extends('layout.dashboard.dashboard')

@section('title')
    @if($category != '')
        Add Category
    @else
        Update Category
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
                                    @if($category != '')
                                        Add Category
                                    @else
                                        Update Category
                                    @endif
                                </h3>
                            </div>

                            <div class="card-body">
                                <form id="add-category-form">
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-12 col-xl-12">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input class="form-control" name="name" type="text"
                                                               placeholder="Name" id="name" required="">
                                                    </div>
                                                </div>

                                            </div>

                                            {{--<div class="row">--}}

                                                {{--<div class="col-lg-6">--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label>Price Local</label>--}}
                                                        {{--<input class="form-control" name="price_local" type="number"--}}
                                                               {{--id="price_local" placeholder="Price in local currency"--}}
                                                               {{--required>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-lg-6">--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label>Price International</label>--}}
                                                        {{--<input class="form-control" name="price_international"--}}
                                                               {{--type="number" id="price_international"--}}
                                                               {{--placeholder="Price in International currency" required>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}

                                            {{--</div>--}}

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    @if($category != '')
                                                        <button type="submit" class="btn btn-primary btn-chng1"
                                                                id="update_category">Update Category
                                                        </button>
                                                        <input type="hidden" name="id" value="{{$category->id}}">
                                                    @else
                                                        <button type="submit" class="btn btn-primary btn-chng1"
                                                                id="add_category">Add Category
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
        $(document).ready(function () {

            $('#add_category').on('click', function (e) {
                e.preventDefault();
                var form = $('form#add-category-form').serialize();
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
                    url: "{{route('add-category-post')}}",
                    data: form,
                    success: function (response, status) {
                        if (response.result == 'success') {
                            $.unblockUI();
                            window.toastr.success(response.message);
                            window.location.reload();
                            $('#add-category-form')[0].reset();
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



            @if($category)
            $('#name').val('{{$category->name}}');
            {{--$('#price_international').val('{{$category->price_international}}');--}}
            {{--$('#price_local').val('{{$category->price_local}}');--}}
            {{--$('#description').val('{{$category->description}}');--}}
            @endif
            $('#update_category').click(function (e) {
                e.preventDefault();
                var form = $('form#add-category-form').serialize();

                $.ajax({
                    type: 'POST',
                    url: "{{route('edit-category-post')}}",
                    data: form,
                    success: function (response, status) {
                        console.log(response);
                        if (response.result == 'success') {
                            window.toastr.success(response.message);
                            window.location.reload();
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





