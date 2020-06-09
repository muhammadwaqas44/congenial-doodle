@extends('layout.dashboard.dashboard')

@section('title')
    Report Listing
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
                                <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <form action="#" method="post" enctype="multipart/form-data">


                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add new user</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                </div>

                                                <div class="modal-body">

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Full name (required)</label>
                                                                <input class="form-control" name="name" type="text" required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Valid Email (required)</label>
                                                                <input class="form-control" name="email" type="email" required="">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Password (required)</label>
                                                                <input class="form-control" name="password" type="text" required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Role</label>
                                                                <select name="role_id" class="form-control" required="">
                                                                    <option value="">- select -</option>
                                                                    <optgroup label="Staff member">
                                                                        <option value="1">Administrator</option>
                                                                        <option value="2">Manager</option>
                                                                        <option value="3">Author</option>
                                                                    </optgroup>

                                                                    <optgroup label="Registered member">
                                                                        <option value="4">User</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Skype (optional)</label>
                                                                <input class="form-control" name="skype" type="text">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Email verified</label>
                                                                <select name="email_verified" class="form-control">
                                                                    <option value="1">YES</option>
                                                                    <option value="0">NO</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Active</label>
                                                                <select name="active" class="form-control">
                                                                    <option value="1">YES</option>
                                                                    <option value="0">NO</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <label>Avatar image (optional):</label> <br>
                                                        <input type="file" name="image">
                                                    </div>

                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary">Add user</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <h3>These visits are completed and available to client and the statistics engine.</h3>
                            </div>
                            <!-- end card-header -->

                            <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th style="width:100px">Visit Date</th>
                                            <th style="width:170px">Brand</th>
                                            <th style="width:140px">Location</th>
                                            <th style="width:50px">Consultant</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <th>
                                                12/21/2019
                                            </th>
                                            <td>
                                                Four Seasons Hotels and Resorts
                                            </td>
                                            <td>Four Seasons Baltimore</td>
                                            <td>Lees Garcia</td>
                                        </tr>

                                        <tr>
                                            <th>
                                                12/21/2019
                                            </th>
                                            <td>
                                                Four Seasons Hotels and Resorts
                                            </td>
                                            <td>Four Seasons Baltimore</td>
                                            <td>Lees Garcia</td>

                                        </tr>

                                        <tr>
                                            <th>
                                                12/21/2019
                                            </th>
                                            <td>
                                                Four Seasons Hotels and Resorts
                                            </td>
                                            <td>Four Seasons Baltimore</td>
                                            <td>Lees Garcia</td>
                                        </tr>

                                        <tr>
                                            <th>
                                                12/21/2019
                                            </th>
                                            <td>
                                                Four Seasons Hotels and Resorts
                                            </td>
                                            <td>Four Seasons Baltimore</td>
                                            <td>Lees Garcia</td>
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





