@extends('layout.dashboard.dashboard')

@section('title')
    Admin-Packages
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
                                <a href="{{route('add-package')}}" class="btn btn-primary btn-sm btnsh3 pull-right"><i
                                        class="fa fa-user-plus" aria-hidden="true"></i>
                                    Add New Package
                                </a>
                            </div>
                            <!-- end card-header -->

                            <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table table-bordered data-table-package">
                                        <thead>
                                        <tr>
                                            <th style="width:70px">Id</th>
                                            <th style="width:70px">Title</th>
                                            <th style="width:100px">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                                                                @if (sizeof($packages) > 0)
                                                                                    @php
                                                                                        $i = 1;
                                                                                    @endphp
                                        {{--                                            @foreach($packages as $package)--}}
                                        <tr>
                                            <th scope="row">

                                            </th>
                                            <td>
                                                {{--                                                        {{$package->title}}--}}
                                            </td>
                                            {{--                                                    <td>--}}
                                            {{--                                                        {{$package->description}}--}}
                                            {{--                                                    </td>--}}
                                            {{--                                                    <td>{{$package->price_local}}</td>--}}
                                            {{--                                                    <td>{{$package->price_international}}</td>--}}

                                            <td>
                                                {{--                                                        <a href="{{route('edit-package',['id'=>$package->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>--}}
                                                {{--                                                        <a href="" class="btn btn-primary btn-sm viw-btn-sh">View</a>--}}
                                                {{--                                                        <a href="#" class="btn btn-secondary btn-sm viw-btn-sh" id="delete">Delete</a>--}}
                                                {{--                                                        <input type="hidden" name="id" id="deleteid" value="">--}}
                                            </td>
                                        </tr>
                                        {{--                                            @endforeach--}}
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
    @if(Request::route()->getName() == 'package-listing')
        <script type="text/javascript">
            $(document).ready(function () {
                var table = $('.data-table-package').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('package-listing') }}",
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'title', name: 'title'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
            });
        </script>
    @endif
@endsection



