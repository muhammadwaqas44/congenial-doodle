@extends('layout.dashboard.dashboard')

@section('title')
    Admin Categories Outlet
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

                                <h3 class="pull-left"> This is the List of All Outlets</h3>
                                {{--<a href="#" class="btn btn-primary btn-sm btnsh3 pull-right"><i--}}
                                {{--class="fa fa-user-plus" aria-hidden="true"></i>--}}
                                {{--Add New Category--}}
                                {{--</a>--}}
                            </div>
                            <!-- end card-header -->

                            <div class="card-body">


                                <div class="table-responsive sub_catgory_td">
                                    <table class="table table-bordered data-table-outlets outlets_list_resp text-center" >
                                        <thead>
                                        <tr>
                                            <th style="width:70px">Id</th>
                                            <th style="width:70px">Name</th>
                                            <th style="width:100px">Type</th>
                                            <th style="width:100px">Sub Categories Count</th>
                                            <th style="width:100px">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row"></th>
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
    @if(Request::route()->getName() == 'outlets-listing')
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('.data-table-outlets').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('outlets-listing') }}",
                    columns: [
                        {data: 'id'},
                        {data: 'name'},
                        {data: 'type'},
                        {data: 'sub_button', orderable: false, searchable: false},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
            });
        </script>
    @endif
@endsection




