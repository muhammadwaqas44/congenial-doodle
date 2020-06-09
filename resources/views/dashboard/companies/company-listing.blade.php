@extends('layout.dashboard.dashboard')

@section('title')
    Admin Companies Listing
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

                                <h3 class="pull-left"> This is the List of All Companies</h3>

                                <a href="{{route('add-company')}}" class="btn btn-primary btn-sm btnsh3 pull-right"><i
                                            class="fa fa-user-plus" aria-hidden="true"></i>
                                    Add New Company
                                </a>
                            </div>
                            <!-- end card-header -->

                            <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table table-bordered data-table-company company_table">
                                        <thead>
                                        <tr>
                                            <th style="width:70px">Title</th>
                                            <th style="width:100px">Full Name</th>
                                            <th style="width:100px">Email</th>
                                            <th style="width:100px">Phone</th>
                                            <th style="width:50px">Auth. Level</th>
                                            <th style="width:100px">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <th></th>
                                            <td></td>

                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <a href="edit-copmany.html" class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pencil-alt"></i></a>

                                            </td>
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
    @if(Request::route()->getName() == 'company-listing')
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('.data-table-company').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('company-listing') }}",
                    columns: [
                        {data: 'title'},
                        {data: 'user.name'},
                        {data: 'user.email'},
                        {data: 'user.phone'},
                        {data: 'access_level'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ],
                });
            });
        </script>
    @endif
@endsection



