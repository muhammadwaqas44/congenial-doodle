@extends('layout.dashboard.dashboard')

@section('title')
    Summary Detail
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
                            <div class="graph-full-div1 graph_compr">
                                <div class="chang-width">
                                    {{--<h1>Test Location 1/02/2012</h1>--}}
                                    {{--                                    <button class="print-btn-page">Print this page</button>--}}
                                </div>

                                <div class="card mb-3 compr_body_card">
                                    <div class="card-body card-body-giv-wdth compr_body">
                                        <ul>
                                            <li class="col_li">
                                                <table
                                                    class="table table-bordered Criteria_table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Outlet Name</th>
                                                        <th scope="col">Possible Points</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($outletsAll as $oultet)
                                                        <tr>
                                                            <th scope="row">{{isset($oultet->name)?$oultet->name:'No'}}</th>

                                                            <td>{{$total_possible[$oultet->id]}}</td>
                                                            {{--                                                            <td>{{$marksSum[$oultet->id]}}</td>--}}
                                                            {{--                                                            <td>--}}
                                                            {{--                                                                {{isset($marksSum[$oultet->id],$total_possible[$oultet->id])?number_format(($marksSum[$oultet->id]/$total_possible[$oultet->id])*100,2):0}}--}}
                                                            {{--                                                                %--}}
                                                            {{--                                                            </td>--}}
                                                            {{--                                                            <td>--}}
                                                            {{--                                                                {{$marksPreviousSum[$oultet->id]}}--}}
                                                            {{--                                                            </td>--}}

                                                            {{--                                                            <td>--}}
                                                            {{--                                                                {{isset($marksPreviousSum[$oultet->id],$total_possible[$oultet->id])?number_format(($marksPreviousSum[$oultet->id]/$total_possible[$oultet->id])*100,2):0}}--}}
                                                            {{--                                                                %--}}
                                                            {{--                                                            </td>--}}

                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <th scope="row">Total :</th>
                                                        <th>{{$total_possible_all}}</th>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </li>
                                            <li class="col_li">
                                                <table
                                                    class="table table-bordered Criteria_table">
                                                    <thead>
                                                    <tr>

                                                        <th scope="col">{{$schedulesLcationOne->company->title}}</th>
                                                        <th scope="col">%</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($outletsAll as $oultet)
                                                        <tr>

                                                            <td>{{$marksSum[$oultet->id]}}</td>
                                                            <td>
                                                                {{isset($marksSum[$oultet->id],$total_possible[$oultet->id])?number_format(($marksSum[$oultet->id]/$total_possible[$oultet->id])*100,2):0}}
                                                                %
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                    <tr>

                                                        <th>{{$marksSumAll}}</th>
                                                        <th>
                                                            @if($total_possible_all != 0)
                                                                {{number_format(($marksSumAll/$total_possible_all)*100,2)}}
                                                                %
                                                            @else
                                                                0%
                                                            @endif
                                                        </th>

                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </li>
                                            <li class="col_li">
                                                <table
                                                    class="table table-bordered Criteria_table">
                                                    <thead>
                                                    <tr>
                                                        {{--                                                        <th scope="col">Outlet Name</th>--}}
                                                        {{--                                                        <th scope="col">Possible Points</th>--}}
                                                        {{--                                                        <th scope="col">First Visit</th>--}}
                                                        {{--                                                        <th scope="col">%</th>--}}
                                                        <th scope="col">{{$schedulesLcationTwo->company->title}}</th>

                                                        <th scope="col">%</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($outletsAll as $oultet)
                                                        <tr>
                                                            {{--                                                            <th scope="row">{{isset($oultet->name)?$oultet->name:'No'}}</th>--}}

                                                            {{--                                                            <td>{{$total_possible[$oultet->id]}}</td>--}}
                                                            {{--                                                            <td>{{$marksSum[$oultet->id]}}</td>--}}
                                                            {{--                                                            <td>--}}
                                                            {{--                                                                {{isset($marksSum[$oultet->id],$total_possible[$oultet->id])?number_format(($marksSum[$oultet->id]/$total_possible[$oultet->id])*100,2):0}}--}}
                                                            {{--                                                                %--}}
                                                            {{--                                                            </td>--}}
                                                            <td>
                                                                {{$marksPreviousSum[$oultet->id]}}
                                                            </td>

                                                            <td>
                                                                {{isset($marksPreviousSum[$oultet->id],$total_possible[$oultet->id])?number_format(($marksPreviousSum[$oultet->id]/$total_possible[$oultet->id])*100,2):0}}
                                                                %
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        {{--                                                        <th scope="row">Total :</th>--}}

                                                        {{--                                                        <th>{{$total_possible_all}}</th>--}}
                                                        {{--                                                        <th>{{$marksSumAll}}</th>--}}
                                                        {{--                                                        <th>--}}
                                                        {{--                                                            @if($total_possible_all != 0)--}}
                                                        {{--                                                                {{number_format(($marksSumAll/$total_possible_all)*100,2)}}--}}
                                                        {{--                                                                %--}}
                                                        {{--                                                            @else--}}
                                                        {{--                                                                0%--}}
                                                        {{--                                                            @endif--}}
                                                        {{--                                                        </th>--}}
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
                                                        {{--                                                        <th>--}}
                                                        {{--                                                            @if($total_possible_all != 0)--}}
                                                        {{--                                                                {{isset($marksSumAll,$total_possible_all,$marksPreviousSumALl)?number_format((($marksSumAll/$total_possible_all)*100)-(($marksPreviousSumALl/$total_possible_all)*100),2):0}}--}}
                                                        {{--                                                                %--}}
                                                        {{--                                                            @else--}}
                                                        {{--                                                                0%--}}
                                                        {{--                                                            @endif--}}
                                                        {{--                                                        </th>--}}
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>


                                    </div>
                                </div>
                            </div>

                        </div>
                        <h1 class="scores-txt" style="margin-top: 20px; float: left;">Lodging Criteria Scores</h1>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 graph-colm">
                            <div class="graph-full-div1 graph_compr">
                                <div class="chang-width">
                                    {{--<h1>Test Location</h1>--}}
                                    {{--<p class="curnt-vist-date">Current Visit Date : 01/02/2020 <span>Previous Visit Date : n/a</span>--}}
                                    {{--</p>--}}
                                    {{--                                    <button class="print-btn-page">Print this page</button>--}}
                                </div>

                                <div class="card mb-3 compr_body_card">

                                    <div class="card-body card-body-giv-wdth compr_body">
                                        <ul>
                                            <li class="col_li">
                                                <table
                                                    class="table Criteria_table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Lodging Category</th>
                                                        <th scope="col">Possible Points</th>
                                                        {{--                                                    <th scope="col">First Visit</th>--}}
                                                        {{--                                                    <th scope="col">%</th>--}}
                                                        {{--                                                    <th scope="col">Second Visit</th>--}}
                                                        {{--                                                    <th scope="col">%</th>--}}
                                                        {{--                                                    <th scope="col">Difference</th>--}}
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach($lodgingsAll as $lodging)
                                                        <tr>
                                                            <th scope="row">{{isset($lodging->name)?$lodging->name:''}}</th>
                                                            <td>{{$lodgingASum[$lodging->id]}}</td>
                                                            {{--                                                        <td>{{isset($lodgingMarksSum[$lodging->id])?$lodgingMarksSum[$lodging->id]:0}}</td>--}}
                                                            {{--                                                        <td>--}}
                                                            {{--                                                            {{isset($lodgingMarksSum[$lodging->id])?number_format(($lodgingMarksSum[$lodging->id]/$lodgingASum[$lodging->id])*100,2):0}}--}}
                                                            {{--                                                            %--}}
                                                            {{--                                                        </td>--}}
                                                            {{--                                                        <td>--}}
                                                            {{--                                                            {{isset($lodgingMarksPreviousSum[$lodging->id])?$lodgingMarksPreviousSum[$lodging->id]:0}}--}}
                                                            {{--                                                        </td>--}}
                                                            {{--                                                        <td>--}}
                                                            {{--                                                            {{isset($lodgingMarksPreviousSum[$lodging->id])?number_format(($lodgingMarksPreviousSum[$lodging->id]/$lodgingASum[$lodging->id])*100,2):0}}--}}
                                                            {{--                                                            %--}}
                                                            {{--                                                        </td>--}}
                                                            {{--                                                    <td>--}}
                                                            {{--                                                        {{isset($lodgingMarksSum[$lodging->id])?number_format((($lodgingMarksSum[$lodging->id]/$lodgingASum[$lodging->id])*100)---}}
                                                            {{--(($lodgingMarksPreviousSum[$lodging->id]/$lodgingASum[$lodging->id])*100),2):0}}--}}
                                                            {{--                                                        %--}}
                                                            {{--                                                    </td>--}}
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </li>
                                            <li class="col_li">
                                                <table
                                                    class="table Criteria_table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">{{$schedulesLcationOne->company->title}}</th>
                                                        <th scope="col">%</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($lodgingsAll as $lodging)
                                                        <tr>
                                                            <td>{{isset($lodgingMarksSum[$lodging->id])?$lodgingMarksSum[$lodging->id]:0}}</td>
                                                            <td>
                                                                {{isset($lodgingMarksSum[$lodging->id])?number_format(($lodgingMarksSum[$lodging->id]/$lodgingASum[$lodging->id])*100,2):0}}
                                                                %
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </li>
                                            <li class="col_li">
                                                <table
                                                    class="table Criteria_table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">{{$schedulesLcationTwo->company->title}}</th>
                                                        <th scope="col">%</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach($lodgingsAll as $lodging)
                                                        <tr>
                                                            <td>
                                                                {{isset($lodgingMarksPreviousSum[$lodging->id])?$lodgingMarksPreviousSum[$lodging->id]:0}}
                                                            </td>
                                                            <td>
                                                                {{isset($lodgingMarksPreviousSum[$lodging->id])?number_format(($lodgingMarksPreviousSum[$lodging->id]/$lodgingASum[$lodging->id])*100,2):0}}
                                                                %
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>

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
