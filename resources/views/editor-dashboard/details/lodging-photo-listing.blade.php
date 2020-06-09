@extends('layout.editor-layout.dashboard')

@section('title')
    Lodging Photo Listing
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
                                <span class="pull-right"><a href="{{route('photo-editor', $scheduleId)}}"><button class="btn btn-primary btn-sm btnsh3" ><i class="fa fa-user-plus" aria-hidden="true"></i> Add New Lodging photo</button></a></span>

                                <h3> Lodging Photo Listing </h3>
                            </div>
                            <!-- end card-header -->

                            <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table table-bordered data-table-allHotelLocation text-center">
                                        <thead>
                                        <tr>
                                            <th style="width:200px">Title</th>
                                            <th style="width:200px">Category</th>
                                            <th style="width:100px">Photo Type</th>
                                            <th style="width:100px">Image</th>
                                            <th style="width:70px">Notes</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><img src="" alt=""></td>
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
    @if(Request::route()->getName() == 'lodging-photo-listing-editor')
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('.data-table-allHotelLocation').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('lodging-photo-listing-editor', $scheduleId) }}",
                    columns: [
                        {data: 'title'},
                        {data: 'category.name'},
                        {data: 'photo_type'},
                        {data: 'image'},
                        {data: 'notes'},
                    ]
                });
            });
        </script>
    @endif
@endsection



