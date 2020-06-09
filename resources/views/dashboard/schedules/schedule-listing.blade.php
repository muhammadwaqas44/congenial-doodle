@extends('layout.dashboard.dashboard')

@section('title')
    Visits Schedule Listing
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
                                <h3>Visit Schedule Listing</h3>
                            </div>
                            <!-- end card-header -->

                            <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="schedule">
                                        <thead>
                                        <tr>
                                            <th style="width:100px">Date</th>
                                            <th style="width:170px">Brand</th>
                                            <th style="width:140px">Location</th>
                                            <th style="width:50px">Consultant</th>
                                            <th style="width:100px">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <th>   </th>
                                            <td>   </td>
                                            <td>   </td>
                                            <td>   </td>
                                            <td>   </td>
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
{{--    @if(Request::route()->getName() == 'allHotelLocation')--}}
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('#schedule').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('scheduleListing') }}",
                    columns: [
                        {data: 'date'},
                        {data: 'brand.brand_name'},
                        {data: 'company.title'},
                        {data: 'consultant.name'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
            });
        </script>
{{--    @endif--}}
@endsection





