@extends('layout.dashboard.dashboard')

@section('title')
    Sub Brand Listing
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
                                  <h3>Sub Brands</h3>
                                  <span class="pull-right"><a href="{{route('subBrandAdd')}}"><button class="btn btn-primary btn-sm btnsh3" ><i class="fa fa-user-plus" aria-hidden="true"></i> Add New Sub Brand</button></a></span>
                             
                            </div>
                            <!-- end card-header -->

                            <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table table-bordered data-table-subBrandListing">
                                        <thead>
                                        <tr>
                                            <th style="width:170px"> Id</th>
                                            <th style="width:170px"> Sub Brand</th>
                                            <th style="width:100px">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>

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
    @if(Request::route()->getName() == 'subBrandListing')
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('.data-table-subBrandListing').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('subBrandListing') }}",
                    columns: [
                        {data: 'id'},
                        {data: 'sub_brand'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
            });
        </script>
    @endif
@endsection


