@extends('layout.editor-layout.dashboard')

@section('title')
    Active Visits
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
                                <h3>Visit Active Schedules</h3>
                            </div>
                            <!-- end card-header -->

                            <div class="card-body">
                                {{--<p>These visits are completed under editorial review.</p>--}}

                                <div class="table-responsive">
                                    <table class="table table-bordered activ_table" id="data-table-active-editor">
                                        <thead>
                                        <tr>
                                            <th style="width:100px">Visit Date</th>
                                            <th style="width:100px">Hotel Brand</th>
{{--                                            <th style="width:100px">Sub Brand</th>--}}
                                            <th style="width:60px">Location</th>
                                            <th style="width:50px">City</th>
                                            <th style="width:50px">State</th>
                                            <th style="width:100px">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th></th>
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
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            var table = $('#data-table-active-editor').DataTable({
                processing: true,
                serverSide: true,
                // buttons: [
                //     'copy', 'csv', 'excel', 'pdf', 'print'
                // ],
                ajax: "{{ route('active-visit-editor') }}",
                columns: [
                    {data: 'date'},
                    {data: 'brand.brand_name'},
                    // {data: 'subbrand.sub_brand'},
                    {data: 'hotellocation.location_name'},
                    {data: 'hotellocation.city'},
                    {data: 'hotellocation.state'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>

    <script>

        function returnEvaluationEditor(id) {
            $.ajax({
                type: 'GET',
                url: "/editor/return-to-consultant/" + id,
                success: function (response, status) {
                    if (response.result == 'success') {
                        window.toastr.success(response.message);
                        setTimeout(function () {
                            window.location.reload();
                        }, 1000);
                    } else if (response.result == 'error') {
                        window.toastr.error(response.message);
                    }
                },
            });
        }
        function completeEvaluationEditor(id) {
            $.ajax({
                type: 'GET',
                url: "/editor/complete-visit/" + id,
                success: function (response, status) {
                    if (response.result == 'success') {
                        window.toastr.success(response.message);
                        setTimeout(function () {
                            window.location.reload();
                        }, 1000);
                    } else if (response.result == 'error') {
                        window.toastr.error(response.message);
                    }
                },
            });
        }

    </script>
@endsection
