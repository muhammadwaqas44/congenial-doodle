@extends('layout.client-layout.dashboard')

@section('title')
    Notifications
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
                                <h3>Notifications</h3>
                            </div>
                            <!-- end card-header -->
                            <div class="card-body">
                                {{--<p>These visits are completed under editorial review.</p>--}}
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="data-table-pending">
                                        <thead>
                                        <tr>
                                            <th style="width:100px">Message</th>
                                            <th style="width:100px">Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
            </div>
            <!-- END container-fluid -->
        </div>
        <!-- END content -->
    </div>
@endsection


@section('script')
    <script>
        $(document).ready(function () {
             $('#data-table-pending').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('read-all-client-notifications') }}",
                columns: [
                    {data: 'message'},
                    {data: 'created_at'},
                ]
            });
        });
    </script>
@endsection



