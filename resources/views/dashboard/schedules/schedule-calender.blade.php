@extends('layout.dashboard.dashboard')

@section('title')
    Admin-Calender
@endsection

@section('css')
    <link href="{{asset('dashboard_assets/css/fullcalendar.min.css')}}" rel="stylesheet"/>
    <style>
        #external-events .fc-event {
            margin: 10px 0;
            cursor: pointer;
        }

        #calendar {
            width: 100%;
        }
        .fc-today-button{
            background-color: #002E89 !important;
            border-color: #002e5b !important;
        }

        .fc-event {
            font-size: 1em;
            border-radius: 2px;
            border: none;
            padding: 5px;
        }

        .fc-day-grid-event .fc-content {
            color: #fff;
        }

        .fc-button {
            background: #eaeaea;
            border: none;
            color: #666b6f;
            margin: 0 3px !important;
            padding: 5px 12px !important;
            text-transform: capitalize;
            height: auto !important;
            box-shadow: none !important;
            border-radius: 3px !important;
        }

        .fc-state-down, .fc-state-active, .fc-state-disabled {
            background-color: #009ffc !important;
            color: #ffffff !important;
            text-shadow: none !important;
        }

        .fc-toolbar h2 {
            font-size: 20px;
            font-weight: 600;
            line-height: 28px;
            text-transform: uppercase;
        }

        .fc th.fc-widget-header {
            background: #e6e6e6;
            font-size: 13px;
            text-transform: uppercase;
            line-height: 18px;
            padding: 10px 0px;
        }

        .fc-unthemed th, .fc-unthemed td, .fc-unthemed thead, .fc-unthemed tbody, .fc-unthemed .fc-divider, .fc-unthemed .fc-row, .fc-unthemed .fc-popover {
            border-color: #eff1f3;
        }
    </style>
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


                <div class="col-xs-12">
                    <div class="card-box tilebox-one noradius">
                        <div class="right-content">
                            <div class="image-div">
                                <div id='calendar'></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END container-fluid -->

    </div>
@endsection





