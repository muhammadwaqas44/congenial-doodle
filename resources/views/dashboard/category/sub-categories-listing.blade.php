@extends('layout.dashboard.dashboard')

@section('title')
    Admin Sub Categories Outlet
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

                                <h3 class="pull-left"> This is the list of all {{$category->name}}:</h3>
                                {{--<a href="#" class="btn btn-primary btn-sm btnsh3 pull-right"><i--}}
                                            {{--class="fa fa-user-plus" aria-hidden="true"></i>--}}
                                    {{--Add New Category--}}
                                {{--</a>--}}
                            </div>
                            <!-- end card-header -->

                            <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table table-bordered data-table-sub-category">
                                        <thead>
                                        <tr>
                                            <th style="width:70px">Id</th>
                                            <th style="width:70px">Name</th>
                                            <th style="width:100px">Type</th>
                                            <th style="width:100px">Parent Category</th>
                                            <th style="width:100px">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            {{--<td></td>--}}
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
    @if(Request::route()->getName() == 'sub-outlets-listing')
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('.data-table-sub-category').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('sub-outlets-listing',$parentId) }}",
                    columns: [
                        {data: 'id'},
                        {data: 'name'},
                        {data: 'type'},
                        {data: 'parent_category'},
//                        {data: 'category_count'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
            });
        </script>
    @endif
@endsection




