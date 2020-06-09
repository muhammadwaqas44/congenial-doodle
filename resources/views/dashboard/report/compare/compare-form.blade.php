@extends('layout.dashboard.dashboard')

@section('title')
    Compare Report
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
                                <h3> Compare Report </h3>
                            </div>

                            <div class="card-body">


                                <form action="{{route('compare-report-post')}}" method="get"
                                      enctype="multipart/form-data">
                                    {{--                                    @csrf--}}
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Months<span class="asterik">*</span></label>
                                                        <select name="month" class="form-control" required>
                                                            <option value="">Select</option>
                                                            @foreach($months as $key=>$value)
                                                                <option
                                                                    value="{{$key}}">{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Years<span class="asterik">*</span></label>
                                                        <select name="year" class="form-control year" required>
                                                            <option value="">Select</option>
                                                            @foreach($years as $year)
                                                                <option
                                                                    value="{{$year}}">{{$year}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>First Company<span class="asterik">*</span></label>
                                                        <select name="company_id_one" class="form-control" required
                                                                id="company_id_first">
                                                            <option value="">Select</option>
                                                            @foreach($companies as $company)
                                                                <option
                                                                    value="{{$company->id}}">{{$company->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Second Company<span class="asterik">*</span></label>
                                                        <select name="company_id_two" class="form-control" required
                                                                id="company_id_two">
                                                            <option value="">Select</option>
                                                            @foreach($companies as $company)
                                                                <option
                                                                    value="{{$company->id}}">{{$company->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>First Company Location<span
                                                                class="asterik">*</span></label>
                                                        <select name="location_id_one" class="form-control" required
                                                                id="location_one">
                                                            <option value="">Select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Second Company Location<span
                                                                class="asterik">*</span></label>
                                                        <select name="location_id_two" class="form-control" required
                                                                id="location_two">
                                                            <option value="">Select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="submit"
                                                            class="btn btn-primary btn-chng1"> Compare
                                                    </button>
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
        </div>
    </div>
@endsection


@section('script')
    <script>

        jQuery('#datepickerVisit').datetimepicker({
            timepicker: false,
            format: 'Y-m-d'
        });

        $(document).ready(function () {
            ////////////////Error Message///////////////
            @if(\Illuminate\Support\Facades\Session::has('message'))
            window.toastr.error("{{ \Illuminate\Support\Facades\Session::get('message') }}", {fadeAway: 2000});
                @endif
                ////////////////////////////Yearfull Name///////////////////////////
            var currentYear = (new Date).getFullYear();
            $('.year').val(currentYear);

        });
    </script>
    <script>

        $('#company_id_first').change(function () {
            var id = $(this).val();
            if (id) {
                $.ajax({
                    type: "GET",
                    url: "{{url('admin/get-location-list-one')}}?company_id_one=" + id,
                    success: function (res) {
                        if (res) {
                            $("#location_one").empty();
                            $("#location_one").append('<option>Select</option>');
                            $.each(res, function (id, location_name) {
                                $("#location_one").append('<option value="' + id + '">' + location_name + '</option>');
                            });
                        } else {
                            $("#location_one").empty();
                        }
                    }
                });
            } else {
                $("#location_one").empty();
            }
        });


        $('#company_id_two').change(function () {
            var id = $(this).val();
            if (id) {
                $.ajax({
                    type: "GET",
                    url: "{{url('admin/get-location-list-two')}}?company_id_two=" + id,
                    success: function (res) {
                        if (res) {
                            $("#location_two").empty();
                            $("#location_two").append('<option>Select</option>');
                            $.each(res, function (id, location_name) {
                                $("#location_two").append('<option value="' + id + '">' + location_name + '</option>');
                            });
                        } else {
                            $("#location_two").empty();
                        }
                    }
                });
            } else {
                $("#location_two").empty();
            }
        });
    </script>

@endsection
