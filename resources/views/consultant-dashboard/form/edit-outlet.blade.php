@extends('layout.consultant-layout.dashboard')

@section('title')
   Edit Outlet
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
                    <div class="col-12">
                        <div class="photo-full-div">
                            <h1>Action</h1>
                            <ul>
                                <li>
                                    <a href="{{route('photo', $outlet->schedule_id)}}">
                                        <div class="action-div-img">
                                            <div class="insid-img-div">
                                                <span class="bkgd-clr-icn"><i class="fas fa-camera"></i></span>
                                                <h1> Add Picture</h1>
                                            </div>
                                        </div>
                                    </a>

                                </li>
                                <li>
                                    <a href="{{route('narrative', $outlet->schedule_id)}}">
                                        <div class="action-div-img">
                                            <div class="insid-img-div">
                                                <span class="bkgd-clr-icn1"><i class="fas fa-bars"></i></span>
                                                <h1> Add Narrative</h1>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('transaction', $outlet->schedule_id)}}">
                                        <div class="action-div-img">
                                            <div class="insid-img-div">
                                                <span class="bkgd-clr-icn2"><i class="fas fa-donate"></i></span>
                                                <h1> Add Transaction</h1>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 graph-colm">
                            <div class="graph-full-div1">
                                <h1>Visit Details</h1>
                                <div class="row">

                                    <div class="col-lg-12 col-xl-12">
                                        <form id="update-outlet-time">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group " style="margin-top: 10px;">
                                                        <label style="font-weight: bold; font-size: 18px;">Outlet Visit
                                                            Date</label>

                                                        <input class="form-control1" name="time" type="text"
                                                               value="{{$outlet->visit_date}}"
                                                               id="datetimepickerVisit"  required>

                                                        <div class="add-div-company">
                                                            <span><i class="fas fa-calendar-week"></i></span>
                                                        </div>
                                                    </div>

                                                <div style="text-align: center; margin-top: 10px;    float: left;">
                                                    <button type="submit" class="button-graph">Change Visit Date and
                                                        Time
                                                    </button>
                                                </div>
                                            </div>
                                            </div>
                                        </form>

                                        {{--                                        <div class="row">--}}
                                        {{--                                            <div class="col-lg-12">--}}
                                        {{--                                                <div class="form-group" style="margin-top: 10px;">--}}
                                        {{--                                                    <label style="font-weight: bold; font-size: 18px;">Outlet Visit Time</label>--}}
                                        {{--                                                    <input class="form-control1" name="name" type="text" value="9:00 PM" required="">--}}
                                        {{--                                                    <div class="add-div-company">--}}
                                        {{--                                                        <span><i class="far fa-clock"></i></span>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}

                                        {{--                                        </div>--}}


                                        <div style="margin-top: 10px;">
                                            <div class="card mb-3">
                                                <div class="card-body card-body-giv-wdth">

                                                    <table class="table edit_out_resp">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">Outlet Catagory</th>
                                                            <th scope="col">Progress</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($categories as $category)
                                                            <tr>
                                                                <td>{{$category->name}}</td>
                                                                <td>
                                                                    <label class="container-checkbx">
                                                                        <input type="checkbox" disabled @if($marks->where('category_id',$category->id)->count() == 0) @else checked="checked" @endif>
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </td>
                                                                <td>

                                                                    @if($marks->where('category_id',$category->id)->count() == 0)
                                                                        <a href="{{route('detail-category-marks',['scheduleId' => $outlet->schedule_id,'catId' =>$category->id])}}">
                                                                            <div class="action-div-img-table div-img-table_action">
                                                                                <div class="insid-img-div ">
                                                                                <span class="bkgd-clr-icn3"><i
                                                                                            class="fas fa-bars"></i></span>
                                                                                    <h1 class="actin-txt-table insid-img-div_td"> Edit
                                                                                        Evaluation</h1>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    @else
                                                                        <a href="{{route('edit-detail-category-marks',['scheduleId' => $outlet->schedule_id,'catId' =>$category->id])}}">
                                                                            <div class="action-div-img-table div-img-table_action">
                                                                                <div class="insid-img-div">
                                                                                <span class="bkgd-clr-icn3"><i
                                                                                            class="fas fa-bars"></i></span>
                                                                                    <h1 class="actin-txt-table insid-img-div_td"> Edit
                                                                                        Evaluation</h1>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    @endif
                                                                    {{--<a--}}
                                                                            {{--href="{{route('edit-detail-category-marks',['scheduleId' => $outlet->schedule_id,'catId' =>$category->id])}}"--}}
                                                                    {{-->--}}
                                                                        {{--<div class="action-div-img-table">--}}
                                                                            {{--<div class="insid-img-div">--}}
                                                                                {{--<span class="bkgd-clr-icn3"><i--}}
                                                                                            {{--class="fas fa-bars"></i></span>--}}
                                                                                {{--<h1 class="actin-txt-table"> Edit--}}
                                                                                    {{--Outlet Report</h1>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</a>--}}
                                                                    {{--@endif--}}

                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        <tr>
                                                            <td>Transactions</td>
                                                            <td>
                                                                {{--<label class="container-checkbx">--}}
                                                                    {{--<input type="checkbox" checked="checked">--}}
                                                                    {{--<span class="checkmark"></span>--}}
                                                                {{--</label>--}}
                                                            </td>
                                                            <td>
                                                                <a href="{{route('transaction-listing', $outlet->schedule_id)}}">
                                                                    <div class="action-div-img-table div-img-table_action">
                                                                        <div class="insid-img-div">
                                                                            <span class="bkgd-clr-icn3"><i
                                                                                        class="fas fa-bars"></i></span>
                                                                            <h1 class="actin-txt-table insid-img-div_td">Edit
                                                                                Evaluation </h1>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pictures</td>
                                                            <td>
                                                                {{--<label class="container-checkbx">--}}
                                                                    {{--<input type="checkbox" checked="checked">--}}
                                                                    {{--<span class="checkmark"></span>--}}
                                                                {{--</label>--}}
                                                            </td>
                                                            <td>



                                                                <a href="{{route('lodging-photo-listing', $outlet->schedule_id)}}">
                                                                <div class="action-div-img-table div-img-table_action">
                                                                    <div class="insid-img-div">
                                                                            <span class="bkgd-clr-icn3"><i
                                                                                        class="fas fa-bars"></i></span>
                                                                        <h1 class="actin-txt-table insid-img-div_td"> Edit
                                                                            Evaluation</h1>
                                                                    </div>
                                                                </div>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="text-align: center; margin-top: 10px;">
{{--                                    <a href="#" class="button-graph">>> Click Here to Finish This Outlets << </a>--}}
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- END container-fluid -->

                </div>
                <!-- END content -->

            </div>
            <!-- END content-page -->

<!--
            <footer class="footer">
                    <span class="text-right">
					Copyright <a target="_blank" href="#">Your Website</a>
					</span>
                <span class="float-right">
					Powered by
					</span>
            </footer>

        </div> -->
        <!-- END content -->

    </div>
@endsection


@section('script')
    <script>
        jQuery('#datetimepickerVisit').datetimepicker({
            timepicker:false,
            format:'y-m-d',
        });
        $('#update-outlet-time').on('submit', function (e) {
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
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "{{route('edit-outlet-post', $outlet->id)}}",
                data: $('#update-outlet-time').serialize(),
                success: function (response, status) {
                    if (response.result == 'success') {
                        $.unblockUI();
                        window.toastr.success(response.message);
                        setTimeout(function () {
                            window.location.reload();
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
        })

    </script>


@endsection



