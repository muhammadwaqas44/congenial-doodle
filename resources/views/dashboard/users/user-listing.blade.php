@extends('layout.dashboard.dashboard')

@section('title')
    {{$heading}}
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
                                <h3 class="pull-left"> Administration : {{$type}} </h3> <a href="{{route('add-user')}}"
                                                                                            class="pull-right">
                                    <button class="btn btn-primary btn-sm btnsh3"><i class="fa fa-user-plus"
                                                                                     aria-hidden="true"></i> Add new
                                        User
                                    </button>
                                </a>
                            </div>
                            <!-- end card-header -->

                            <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table table-bordered data-table-user UserListing_table">
                                        <thead>
                                        <tr>
                                            <th style="width:100px">Full Name</th>
                                            <th style="width:250px">E-mail</th>
                                            <th style="width:250px">Phone</th>
                                            <th style="width:250px">Status</th>
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
    <script type="text/javascript">
        function softDeleteUserBtn(id){
            $.blockUI({
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                }
            })
            var url = "{{route('soft-delete-user',":id")}}";
            url = url.replace(':id', id);
            $.ajax({
                type: 'GET',
                url: url,
                success: function (response, status) {
                    if (response.result == 'success') {
                        $.unblockUI();
                        window.toastr.success(response.message);
                        window.location.reload();
                    }
                    if (response.result == 'error') {
                        $.unblockUI();
                        window.toastr.error(response.message);
                    }
                },
                error: function (data) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $.unblockUI();
                        window.toastr.error(value);
                    });
                }
            });
        }


    </script>
    @if(Request::route()->getName() == 'admin-listing')
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('.data-table-user').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('admin-listing') }}",
                    columns: [
                        // {data: 'id', name: 'id'},
                        {data: 'name', name: 'name'},
                        {data: 'email', name: 'email'},
                        {data: 'phone', name: 'phone'},
                        {data: 'status', name: 'status'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
            });
        </script>
    @elseif(Request::route()->getName() == 'consultant-listing')
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('.data-table-user').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('consultant-listing') }}",
                    columns: [
                        // {data: 'id', name: 'id'},
                        {data: 'name', name: 'name'},
                        {data: 'email', name: 'email'},
                        {data: 'phone', name: 'phone'},
                        {data: 'status', name: 'status'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
            });
        </script>
    @elseif (Request::route()->getName() == 'editor-listing')
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('.data-table-user').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('editor-listing') }}",
                    columns: [
                        // {data: 'id', name: 'id'},
                        {data: 'name', name: 'name'},
                        {data: 'email', name: 'email'},
                        {data: 'phone', name: 'phone'},
                        {data: 'status', name: 'status'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
            });
        </script>
    @elseif (Request::route()->getName() == 'clients-listing')
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('.data-table-user').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('clients-listing') }}",
                    columns: [
                        // {data: 'id', name: 'id'},
                        {data: 'name', name: 'name'},
                        {data: 'email', name: 'email'},
                        {data: 'phone', name: 'phone'},
                        {data: 'status', name: 'status'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
            });
        </script>
    @else
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('.data-table-user').DataTable();
            });
        </script>
    @endif
@endsection
