@extends('layout.client-layout.dashboard')

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
                        <h1 class="scores-txt">Outlet Criteria Scores</h1>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 graph-colm">
                            <div class="graph-full-div1">
                                <div class="chang-width">
                                    {{--<h1>Test Location 1/02/2012</h1>--}}
                                    <a href="{{route('outlet-print',$schedule->id)}}" target="_blank">
                                    <button class="print-btn-page">Print this page</button></a>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body card-body-giv-wdth">
                                        <table class="table table-responsive-xl mx-wdth-table text-center table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col">Outlet Name</th>
                                                <th scope="col">Possible Points</th>
                                                <th scope="col">This Visit</th>
                                                <th scope="col">%</th>
                                                <th scope="col">Prev.Visit</th>
                                                <th scope="col">%</th>
                                                <th scope="col">Difference</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($oultets as $oultet)
                                                <tr>
                                                    <th scope="row">{{isset($oultet->category->name)?$oultet->category->name:''}}</th>

                                                    <td>{{$total_possible[$oultet->category_id]}}</td>
                                                    <td>{{$marksSum[$oultet->category_id]}}</td>
                                                    <td>
                                                        {{number_format(($marksSum[$oultet->category_id]/$total_possible[$oultet->category_id])*100,2)}}
                                                        %
                                                    </td>
                                                    <td>
                                                        {{$marksPreviousSum[$oultet->category_id]}}
                                                    </td>

                                                    <td>
                                                        {{number_format(($marksPreviousSum[$oultet->category_id]/$total_possible[$oultet->category_id])*100,2)}}
                                                        %
                                                    </td>
                                                    <td>
                                                        {{number_format((($marksSum[$oultet->category_id]/$total_possible[$oultet->category_id])*100)- (($marksPreviousSum[$oultet->category_id]/$total_possible[$oultet->category_id])*100),2)}}
                                                        %
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <th scope="row">Total :</th>

                                                <th>{{$total_possible_all}}</th>
                                                <th>{{$marksSumAll}}</th>
                                                <th>
                                                    @if($total_possible_all != 0)
                                                        {{number_format(($marksSumAll/$total_possible_all)*100,2)}}%
                                                    @else
                                                        0%
                                                    @endif
                                                </th>
                                                <th>
                                                    {{$marksPreviousSumALl}}
                                                </th>
                                                <th>
                                                    @if($total_possible_all != 0)
                                                        {{isset($marksPreviousSumALl,$total_possible_all)?number_format(($marksPreviousSumALl/$total_possible_all)*100,2):0}}
                                                        %
                                                    @else
                                                        0%
                                                    @endif
                                                </th>
                                                <th>
                                                    @if($total_possible_all != 0)
                                                        {{isset($marksSumAll,$total_possible_all,$marksPreviousSumALl)?number_format((($marksSumAll/$total_possible_all)*100)-(($marksPreviousSumALl/$total_possible_all)*100),2):0}}
                                                        %
                                                    @else
                                                        0%
                                                    @endif
                                                </th>
                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <h1 class="scores-txt" style="margin-top: 20px; float: left;">Lodging Criteria Scores</h1>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 graph-colm">
                            <div class="graph-full-div1">
                                <div class="chang-width">
                                    {{--<h1>Test Location</h1>--}}
                                    {{--<p class="curnt-vist-date">Current Visit Date : 01/02/2020 <span>Previous Visit Date : n/a</span>--}}
                                    {{--</p>--}}
                                    <a href="{{route('lodging-print',$schedule->id)}}" target="_blank">
                                        <button class="print-btn-page">Print this page</button></a>                                </div>
                                <div class="card mb-3">
                                    <div class="card-body card-body-giv-wdth">
                                        <table class="table table-responsive-xl mx-wdth-table text-center table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col">Lodging Category</th>
                                                <th scope="col">Possible Points</th>
                                                <th scope="col">This Visit</th>
                                                <th scope="col">%</th>
                                                <th scope="col">Prev.Visit</th>
                                                <th scope="col">%</th>
                                                <th scope="col">Difference</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($lodgings as $lodging)
                                                <tr>
                                                    <th scope="row">{{isset($lodging->category)?$lodging->category->name:''}}</th>

                                                    <td>{{$total_possible_loding[$lodging->category_id]}}</td>
                                                    <td>{{$lodgingMarksSum[$lodging->category_id]}}</td>
                                                    <td>
                                                        {{number_format(($lodgingMarksSum[$lodging->category_id]/$total_possible_loding[$lodging->category_id])*100,2)}}%
                                                    </td>
                                                    <td>
                                                        {{$lodgingMarksPreviousSum[$lodging->category_id]}}
                                                    </td>
                                                    <td>
                                                        {{number_format(($lodgingMarksPreviousSum[$lodging->category_id]/$total_possible_loding[$lodging->category_id])*100,2)}}%
                                                    </td>
                                                    <td>
                                                        {{number_format((($lodgingMarksSum[$lodging->category_id]/$total_possible_loding[$lodging->category_id])*100)-(($lodgingMarksPreviousSum[$lodging->category_id]/$total_possible_loding[$lodging->category_id])*100),2)}}%
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
