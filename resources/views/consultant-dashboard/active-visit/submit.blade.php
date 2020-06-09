@extends('layout.consultant-layout.dashboard')

@section('title')
    Submit Visits
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
                                <h1>Submit for Editorial Review</h1>
                                <p class="option-para"> This option change the status of this visit to ready for
                                    Editorial
                                    Review,which locks it for editing. if you want to return to the Visit Dashboard and
                                    cancel this action,<a href="{{route('visit-detail-consultant',$schedule->id)}}">CLICK HERE</a></p>
                                <h1 class="visit-dat-txt">Visit Date : <span
                                            style="padding-left: 10px;">{{\Carbon\Carbon::parse($schedule->date)->format('d F Y')}}</span>
                                </h1>
                                <h1 class="visit-dat-txt">Hotel : <span style="padding-left: 10px;">{{isset($schedule->brand)?$schedule->brand->brand_name:'No Hotel Brand'}}</span>
                                </h1>
                                <h1 class="visit-dat-txt">Location : <span
                                            style="padding-left: 10px;">{{isset($schedule->hotellocation)?$schedule->hotellocation->location_name:'No Hotel Location'}}</span>
                                </h1>
                                <h1 class="visit-dat-txt">Consultant : <span style="padding-left: 10px;">{{isset($schedule->consultant)?$schedule->consultant->name:'No Consultant Added'}}</span>
                                </h1>


                                <div style="text-align: center;">
                                    <a onClick="submitEvaluationConsultant({{$schedule->id}})" class="button-graph">Submit Visit for Review </a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
    </div>
@endsection
@section('script')


    <script>

        function submitEvaluationConsultant(id){
            $.ajax({
                type: 'GET',
                url: "/consultant/submit-visit-editor/"+id,
                success: function (response, status) {
                    if (response.result == 'success') {
                        window.toastr.success(response.message);
                        setTimeout(function () {
                            window.location.href="{{route('active-visit')}}";
                        }, 1000);
                    } else if (response.result == 'error') {
                        window.toastr.error(response.message);
                    }
                },
            });
        }



    </script>
@endsection
