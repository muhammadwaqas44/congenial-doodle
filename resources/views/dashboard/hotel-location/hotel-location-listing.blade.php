@extends('layout.dashboard.dashboard')

@section('title')
    Hotel Brand Location Listing
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
                               
                                <h3> Hotel Brands Location </h3>
                                <span class="pull-right"><a href="{{route('addHotelLocation')}}"><button class="btn btn-primary btn-sm btnsh3" ><i class="fa fa-user-plus" aria-hidden="true"></i> Add New Hotel Location</button></a></span>

                            </div>
                            <!-- end card-header -->

                            <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table table-bordered data-table-allHotelLocation hotel_tble">
                                        <thead>
                                        <tr>
                                            <th >Id</th>
                                            <th >Company Name</th>
                                            <th >Hotel Brand</th>
                                            <th >Location Name</th>
                                            <th >City</th>
                                            <th >State</th>
                                            <th >Country</th>
                                            <th >Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>


                            </div>
                            <!-- end card-body -->

                        </div>
                        <!-- end card -->

                    </div>
                    <!-- end col -->

                </div>
            </div>
            <!-- END container-fluid -->

        </div>
        <!-- END content -->

    </div>
@endsection


@section('script')
    @if(Request::route()->getName() == 'allHotelLocation')
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('.data-table-allHotelLocation').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('allHotelLocation') }}",
                    columns: [
                        {data: 'id'},
                        {data: 'company.title'},
                        {data: 'brand.brand_name'},
                        {data: 'location_name'},
                        {data: 'city'},
                        {data: 'state'},
                        {data: 'country'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
            });
        </script>
    @endif
@endsection



