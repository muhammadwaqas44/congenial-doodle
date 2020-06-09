@extends('layout.dashboard.dashboard')

@section('title')
    Details
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
                        {{--<div class="hotl-nam-img-div">--}}
{{--                            <img class="hotl-img" src="{{asset('dashboard_assets/images/sample-image-1.jpg')}}" alt="">--}}
                            {{--<h1 class="hotle-txt-img">Welcome to the Hotel</h1>--}}
                        {{--</div>--}}
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 graph-colm">
                            <div class="graph-full-div">
                                <h1>{{$category->name}}</h1>
                                <a href="{{route('visit-detail-company',$scheduleId)}}" class="button-graph"><< Rerturn to Visit Summary </a>
                                <div>
                                    <div class="card mb-3">

                                        <div class="card-body">
                                            <div id="columnchart_values"></div>
                                        </div>
                                        {{--<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 graph-colm">
                            <div class="graph-full-div1">
                                <h1>{{$category->name}}</h1>
                                <div class="card mb-3">
                                    <div class="card-body card-body-giv-wdth">

                                        <table class="table table-responsive-xl mx-wdth-table text-center">
                                            <thead>
                                            <tr>
                                                <th scope="col">Number</th>
                                                <th scope="col">Questions</th>
                                                <th scope="col">Possible Points</th>
                                                <th scope="col">This Visit</th>
                                                <th scope="col">Previous Visit</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $i = 1;
                                            @endphp

                                            @foreach($questionsA as  $question)
                                                <tr>
                                                    <th scope="row">{{$i++}}</th>
                                                    <td class="txt-justify">
                                                        {{$question->question}}
                                                    </td>
                                                    <td>{{$question->possible_point}}</td>
                                                    <td>{{isset($aArray[$question->id])?$aArray[$question->id]: '0'}}</td>
                                                    <td>{{isset($aArrayPrevious[$question->id])?$aArrayPrevious[$question->id]: '-'}}</td>
                                                </tr>
                                            @endforeach
                                            @foreach($questionsB as  $question)
                                                <tr>
                                                    <th scope="row">{{$i++}}</th>
                                                    <td class="txt-justify">
                                                        {{$question->question}}
                                                    </td>
                                                    <td>{{$question->possible_point}}</td>
                                                    <td>{{isset($bArray[$question->id])?$bArray[$question->id]: '0'}}</td>
                                                    <td>{{isset($bArrayPrevious[$question->id])?$bArrayPrevious[$question->id]: '-'}}</td>
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
    <!-- END content-page -->
@endsection
@section('script')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            google.charts.load("current", {packages: ['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Element', 'Density', { role: 'style' }],
{{--                        @foreach($categories as $category)--}}
                    ['{{$category->name}}', {{$marks->sum('value')}}, '#b87333'],            // RGB value
//                    ['Silver', 10.49, 'silver'],            // English color name
//                    ['Gold', 19.30, 'gold'],

//                    ['Platinum', 21.45, 'color: #e5e4e2' ], // CSS-style declaration
                    {{--@endforeach--}}
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                    {
                        calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation"
                    },
                    2]);

                var options = {
                    title: "{{$category->name}}",
                    width: 900,
                    height: 500,
//                    bar: {groupWidth: "95%"},
                    legend: {position: "none"},
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                chart.draw(view, options);
            }
        });
    </script>
@endsection
