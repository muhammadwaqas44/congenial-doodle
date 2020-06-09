@extends('layout.dashboard.dashboard')

@section('title')
    Admin-Services
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

                                <h3 class="pull-left"> This is the list of all services:</h3>
                                <a href="{{route('add-service')}}" class="btn btn-primary btn-sm btnsh3 pull-right"><i
                                        class="fa fa-user-plus" aria-hidden="true"></i>
                                    Add New Service
                                </a>
                            </div>
                            <!-- end card-header -->

                            <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table table-bordered data-table-service">
                                        <thead>
                                        <tr>
                                            <th style="width:70px">Id</th>
                                            <th style="width:70px">Title</th>
                                            <th style="width:100px">Description</th>
                                            <th style="width:100px">Price in local</th>
                                            <th style="width:50px">Price in International</th>
                                            <th style="width:100px">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
{{--                                        @if (sizeof($services) > 0)--}}
{{--                                        @php--}}
{{--                                        $i = 1;--}}
{{--                                        @endphp--}}
{{--                                        @foreach($services as $service)--}}
                                        <tr>
                                            <th scope="row">
{{--                                                {{$i++}}--}}
                                            </th>
                                            <td>
{{--                                                {{$service->title}}--}}
                                            </td>
                                            <td>
{{--                                                {{$service->description}}--}}
                                            </td>
                                            <td>
{{--                                                {{$service->price_local}}--}}
                                            </td>
                                            <td>
{{--                                                {{$service->price_international}}--}}
                                            </td>

                                            <td>
{{--                                                <a href="{{route('edit-service',['id'=> $service->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>--}}
{{--                                                <a href="copmany-details.html" class="btn btn-primary btn-sm viw-btn-sh">View</a>--}}
{{--                                                <a href="#" class="btn btn-secondary btn-sm viw-btn-sh" id="delete">Delete</a>--}}
{{--                                                <input type="hidden" name="id" id="deleteid" value="{{$service->id}}">--}}
                                            </td>
                                        </tr>
{{--                                        @endforeach--}}
{{--                                        @else--}}
{{--                                            <tr>--}}
{{--                                                <td></td>--}}
{{--                                                <td>--}}
{{--                                                    <h4>No records found.</h4>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                        @endif--}}
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
    @if(Request::route()->getName() == 'service-listing')
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('.data-table-service').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('service-listing') }}",
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'title', name: 'title'},
                        {data: 'description', name: 'description'},
                        {data: 'price_local', name: 'price_local'},
                        {data: 'price_international', name: 'price_international'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
            });
        </script>
    @endif
@endsection




