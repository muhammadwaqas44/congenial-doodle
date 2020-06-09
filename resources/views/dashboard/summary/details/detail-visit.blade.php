@extends('layout.dashboard.dashboard')

@section('title')
    Portal
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
                        {{--<div class="hotl-nam-img-div text-center">--}}
                            {{--                            <img class="hotl-img" src="{{asset('dashboard_assets/images/sample-image-1.jpg')}}" alt="">--}}
                            {{--<h1 class="hotle-txt-img ">Welcome to the Hotel</h1>--}}
                        {{--</div>--}}

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 graph-colm">
                            <div class="graph-full-div1 graph_outSumry">
                                <h1 class="detail_Text" style="width: 50%; float: left;">{{isset($schedule->brand)?$schedule->brand->brand_name:'No Hotel Brand'}}</h1>
                                <h1 class="detail_Text" style="width: 50%; float: left;" class="text-right">Visit Date
                                    : <span class="text-right_span"> {{\Carbon\Carbon::parse($schedule->date)->format('d F Y')}}</span></h1>
                                <div style="text-align: center; margin-top: 10px; float: left; width: 100%;">
                                    <a href="{{route('summary-score-company',$schedule->id)}}" class="button-graph">
                                        >> Click Here to View Outlet Summary << </a>
                                </div>
                                <h1>Outlets</h1>
                                <div class="card mb-3">
                                    <div class="card-body card-body-giv-wdth">

                                        <table class="table compar_respon">
                                            <thead>
                                            <tr>
                                                <th scope="col">Outlets Name</th>
                                                <th scope="col">Outlets Types</th>
                                                <th scope="col">Compare Visit Scores</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($oultets as $oultet)
                                                <tr>
                                                    <td scope="row">{{$oultet->name}}</td>
                                                    <td scope="row">{{isset($oultet->category)?$oultet->category->name:''}}</td>
                                                    <td>
                                                        <a href="{{route('report-detail-outlet-company',['scheduleId'=>$schedule->id,'catId'=>$oultet->category->id])}}"> Most Recent Visit</a> <br>
{{--                                                        <a href="{{route('portal-detail')}}"> Additional Report </a>--}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <h1>Lodging</h1>
                                <div class="card mb-3">
                                    <div class="card-body card-body-giv-wdth">

                                        <table class="table compar_respon">
                                            <thead>
                                            <tr>
                                                <th scope="col">Lodging Category</th>
                                                <th scope="col">Compare Visit Scores</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($lodgings as $lodging)
                                                <tr>
                                                    <td scope="row">{{isset($lodging->category)?$lodging->category->name:''}}</td>
                                                    <td>
                                                        <a href="{{route('report-detail-company',['scheduleId'=>$schedule->id,'catId'=>$lodging->category->id])}}"> Most Recent Visit</a> <br>
                                                        {{--<br>--}}
                                                        {{--<a href="{{route('portal-detail')}}"> Additional Report </a>--}}
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
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
    </div>
@endsection
