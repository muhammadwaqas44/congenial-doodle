@extends('layout.dashboard.dashboard')

@section('title')
    Add New Schedule
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
                                <h3> {{$editSchedule ? 'Edit Visit Schedule' : 'Add Visit Schedule'}} </h3>
                            </div>

                            <div class="card-body">


                                <form id="add_schedule" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-12 col-xl-12">
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group brand">
                                                        <label for="exampleFormControlSelect1">
                                                            Hotel Brand<span class="asterik">*</span></label>
                                                        <select class="form-control" name="brand_id" id="brand_id"
                                                                id="exampleFormControlSelect1">
                                                                    @if($editSchedule)
                                                                        <option value="{{isset($editSchedule->brand->id)?$editSchedule->brand->id:''}}">{{isset($editSchedule->brand->brand_name)?$editSchedule->brand->brand_name:'Select'}}
                                                                        </option>
                                                                    @else
                                                                <option value="">Select</option>
                                                            @foreach($hotelBrands as $hotelBrand)
                                                                            <option value="{{$hotelBrand->id}}">{{$hotelBrand->brand_name}}</option>
                                                                        @endforeach
                                                                    @endif

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group sub_brand">
                                                        <label for="exampleFormControlSelect1">
                                                            Sub Brand</label>
                                                        <select class="form-control" name="sub_brand_id" id="sub_brand_id"
                                                                id="exampleFormControlSelect1">
                                                                     @if($editSchedule)
                                                                        <option value="{{isset($editSchedule->subbrand->id)?$editSchedule->subbrand->id:''}}">{{isset($editSchedule->subbrand->sub_brand)?$editSchedule->subbrand->sub_brand:'Select'}}</option>
                                                                `    @else
                                                                <option value="">Select</option>

                                                            @foreach($subBrands as $subBrand)
                                                                    <option value="{{$subBrand->id}}">{{$subBrand->sub_brand}}</option>
                                                                @endforeach
                                                                    @endif

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Hotel Location<span class="asterik">*</span></label>
                                                        <select name="hotel_location_id" class="form-control" required id="hotel_location_id">
                                                            @if($editSchedule)
                                                                <option value="{{isset($editSchedule->hotellocation->id)?$editSchedule->hotellocation->id:''}}">{{isset($editSchedule->hotellocation->location_name)?$editSchedule->hotellocation->location_name:'Select'}}</option>
                                                            @else
                                                                <option value="">Select</option>
                                                            @foreach($hotelLocations as $hotelLocation)
                                                                    <option value="{{$hotelLocation->id}}">{{$hotelLocation->location_name}}</option>
                                                                @endforeach
                                                            @endif

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Visiting Date<span class="asterik">*</span></label>
                                                        <ul class=" acedin-ul-new">
                                                            <li><input class="sh-datetime-compny"
                                                                       id="datetimepickerVisit" value="{{$editSchedule ? $editSchedule->date : ''}}" type="text" onkeypress="return false;" autocomplete="off" name="date">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Consultant<span class="asterik">*</span></label>
                                                        <select name="consultant_id" class="form-control" required id="consultant_dropdown">
                                                            @if($editSchedule)
                                                                <option value="{{isset($editSchedule->consultant->id)?$editSchedule->consultant->id:''}}">{{isset($editSchedule->consultant->name)?$editSchedule->consultant->name:'Select'}}</option>
                                                            @else
                                                                <option value="">Select</option>
                                                            @endif
                                                            @foreach($consultants as $consultant)
                                                                    <option value="{{$consultant->id}}">{{$consultant->name}}</option>@endforeach


                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Company<span class="asterik">*</span></label>
                                                        <select name="company_id" class="form-control" required id="company_id">
                                                            @if($editSchedule)
                                                                <option value="{{isset($editSchedule->company->id)?$editSchedule->company->id:''}}">{{isset($editSchedule->company->title)?$editSchedule->company->title:'Select'}}</option>
                                                            @else
                                                                <option value="">Select</option>

                                                            @foreach($companies as $company)
                                                                    <option value="{{$company->id}}">{{$company->title}}</option>
                                                                @endforeach

                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            @if($editSchedule)
                                                <input type="hidden" name="schedule_id" value="{{$editSchedule->id}}">
                                            @endif
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label> Note</label>
                                                        <textarea class="form-control" name="remarks" id="your_textarea"
                                                                  cols="60"
                                                                  rows="8">{{$editSchedule ? $editSchedule->notes : ''}}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-primary btn-chng1"> {{$editSchedule ? 'Update Visit Schedule' : 'Add Visit Schedule'}}
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

        jQuery('#datetimepickerVisit').datetimepicker({
            timepicker:false,
            format:'y-m-d',
        });


        $("#your_textarea").on('keyup', function (event) {
            var count = $("#your_textarea").val().length;
            if (count > 2000) {
                window.toastr.warning('For Note You Add Only 2000 Characters And Your Characters are ' + count + '');
            }
        });

    </script>
    <script>
        @if($editSchedule != '')

        $("#company_id").prop("disabled", true);
        $("#brand_id").prop("disabled", true);
        $("#sub_brand_id").prop("disabled", true);
        $("#hotel_location_id").prop("disabled", true);

        $('form#add_schedule').on('submit', function (e) {
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
                url: "{{route('updateVisitSchedule_post')}}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (response, status) {
                    if (response.result == 'success') {
                        $.unblockUI();
                        window.toastr.success(response.message, { fadeAway: 2000 });
                        setTimeout(function () {
                            window.location.href="{{route('scheduleListing')}}";
                        }, 1000);
                    } else if (response.result == 'error') {
                        $.unblockUI();
                        window.toastr.error(response.message, { fadeAway: 2000 });
                    }
                },
                error: function (data) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $.unblockUI();
                        window.toastr.error(value, { fadeAway: 2000 });
                    });
                }
            });
        });
        @else
        {{--            ------------------------------------------------------------------------------------------------}}
        {{--            ------------------------------------------------------------------------------------------------}}
        {{--            ------------------------------------------------------------------------------------------------}}
        {{--            ------------------------------------------------------------------------------------------------}}
        {{--            ------------------------------------------------------------------------------------------------}}
        {{--            ------------------------------------------------------------------------------------------------}}
        $('form#add_schedule').on('submit', function (e) {
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
                url: "{{route('addVisitSchedule_post')}}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (response, status) {
                    if (response.result == 'success') {
                        $.unblockUI();
                        window.toastr.success(response.message, { fadeAway: 2000 });
                        setTimeout(function () {
                            window.location.href="{{route('scheduleListing')}}";
                        }, 1000);
                    } else if (response.result == 'error') {
                        $.unblockUI();
                        window.toastr.error(response.message, { fadeAway: 2000 });
                    }
                },
                error: function (data) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $.unblockUI();
                        window.toastr.error(value, { fadeAway: 2000 });
                    });
                }
            });
        });

        @endif


    </script>

@endsection
