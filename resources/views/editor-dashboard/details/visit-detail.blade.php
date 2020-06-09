@extends('layout.editor-layout.dashboard')

@section('title')
    Active Visits Details
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
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 graph-colm">
                            <div class="graph-full-div1">
                                <h1>Visit Details</h1>
                                <div class="row">

                                    <div class="col-lg-12 col-xl-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group " style="margin-top: 10px;">
                                                <h1 class="details-txt-h">Visit Date: <span
                                                            class="details-txt-s">{{\Carbon\Carbon::parse($schedule->date)->format('d F Y')}}</span>
                                                </h1>
                                            </div>
                                            <div class="form-group " style="margin-top: 10px;">
                                                <h1 class="details-txt-h">Hotel Brand: <span class="details-txt-h">{{isset($schedule->brand)?$schedule->brand->brand_name:'No Hotel Brand'}}
                                                        <br>{{isset($schedule->hotellocation)?$schedule->hotellocation->location_name:'No Hotel Location'}}</span>
                                                    <br>
                                                </h1>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group " style="margin-top: 10px;">
                                                <h1 class="details-txt-h">Visit Notes: <br><span
                                                            class="details-txt-s">{{$schedule->notes}}</span>
                                                </h1>
                                            </div>
                                            {{--<div style="text-align: right; margin-top: 110px;">--}}
                                                {{--<a href="{{route('submit-visit',$schedule->id)}}" class="button-graph">Submit for--}}
                                                    {{--Review </a>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="photo-full-div giv-margin">
                        <h1 class="eva-los">Lodging Evaluation</h1>
                        <ul>
                            <li>
                                <div class="action-div-img">

                                    <a href="{{route('photo-editor', $scheduleId)}}">
                                        <div class="insid-img-div">
                                            <span class="bkgd-clr-icn"><i class="fas fa-camera"></i></span>
                                            <h1> Add Picture </h1>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="action-div-img">
                                    <a href="{{route('narrative-editor',$scheduleId)}}">
                                        <div class="insid-img-div">
                                            <span class="bkgd-clr-icn1"><i class="fas fa-bars"></i></span>
                                            <h1> Add Narrative</h1>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="action-div-img">
                                    <a href="{{route('lodging-editor',$scheduleId)}}">
                                        <div class="insid-img-div">
                                            <span class="bkgd-clr-icn4"><i class="fas fa-home"></i></span>
                                            <h1> Add Lodging</h1>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <div style="margin-top: 10px;">
                            <div class="card mb-3">
                                <div class="card-body card-body-giv-wdth">

                                    <table class="table table-responsive-xl mx-wdth-table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Lodging Catagory</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($lodgings as $lodging)
                                            <tr>
                                                <td>{{$lodging->category->name}}</td>
                                                <td style="display: flex; justify-content: center;">
                                                    <label class="container-checkbx">
                                                        <input type="checkbox" disabled @if($marks->where('category_id',$lodging->category_id)->count() == 0) @else checked="checked" @endif>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </td>

                                                <td>
                                                    @if($marks->where('category_id',$lodging->category_id)->count() == 0)
                                                        <a href="{{route('detail-category-marks-editor',['scheduleId' => $scheduleId,'catId' =>$lodging->category_id])}}"
                                                           class="btn btn-primary btn-sm viw-btn-sh">Add
                                                            Lodging Report</a>
                                                    @else
                                                        <a href="{{route('edit-detail-category-marks-editor',['scheduleId' => $scheduleId,'catId' =>$lodging->category_id])}}"
                                                           class="btn btn-primary btn-sm viw-btn-sh">Edit
                                                            Lodging Report</a>
                                                    @endif
                                                        <button type="button" onclick="deleteCategory('{{$lodging->id}}', 'lodging')"  class="btn btn-primary btn-sm viw-btn-sh-red"> Delete </button>

                                                </td>
                                            </tr>
                                        @endforeach

                                        <tr>
                                            <td>Lodging Photos</td>
                                            <td>

                                            </td>


                                                <td>
                                                    <a href="{{route('lodging-photo-listing-editor', $scheduleId)}}"
                                                       class="btn btn-primary btn-sm viw-btn-sh">View Change Photo</a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lodging Narratives</td>
                                            <td>

                                            </td>


                                                <td>
                                                    <a href="{{route('narrative-listing-editor', $scheduleId)}}"
                                                       class="btn btn-primary btn-sm viw-btn-sh">View Change Narrative</a>

                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="photo-full-div giv-margin">
                        <h1 class="eva-los">Outlet Evaluation</h1>
                        <ul>
                            <li>
                                <div class="action-div-img">
                                    <a href="{{route('outlet-editor',$scheduleId)}}">

                                        <div class="insid-img-div">
                                            <span class="bkgd-clr-icn"><i class="fas fa-camera"></i></span>
                                            <h1> Add Outlet </h1>
                                        </div>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <div style="margin-top: 10px;">
                            <div class="card mb-3">
                                <div class="card-body card-body-giv-wdth">

                                    <table class="table table-responsive-xl mx-wdth-table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Outlet Name</th>
                                            <th scope="col">Visit Number</th>
                                            <th scope="col">Outlet Catagory</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($oultets as $oultet)
                                            <tr>

                                                <td>{{$oultet->name}}</td>
                                                <td>
                                                    {{$oultet->visit_number}}
                                                </td>
                                                <td>
                                                    {{$oultet->category->name}}
                                                </td>

                                                <td>
                                                    <a href="{{route('edit-outlet-editor', $oultet->id)}}"
                                                       class="btn btn-primary btn-sm viw-btn-sh">Edit
                                                        Outlet</a>
                                                    <button type="button" onclick="deleteCategory('{{$oultet->id}}', 'outlet')" class="btn btn-primary btn-sm viw-btn-sh-red">Delete
                                                        Outlet</button>
                                                </td>

                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        function deleteCategory(category, type){
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
            var url = "{{route('delete-visit-detail-editor',[':type', ':category'])}}";
            url = url.replace(':type', type);
            url = url.replace(':category', category);
            console.log(url);
            $.ajax({
                type: 'GET',
                url: url,
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
        }
    </script>

@endsection


