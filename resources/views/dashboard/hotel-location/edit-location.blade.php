@extends('layout.dashboard.dashboard')

@section('title')
    Edit Location
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
                                <h3>Add Hotel Brand</h3>
                            </div>

                            <div class="card-body">


                                <form action="#" method="post" enctype="multipart/form-data">

                                    <div class="row">

                                        <div class="col-lg-12 col-xl-12">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Hotel Company Name</label>
                                                        <input class="form-control" name="name" type="text"
                                                               value="Hotel Company Name" required="">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input class="form-control" name="City" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input class="form-control" name="Address" type="text"
                                                               value="Address" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" name="" type="text" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>ZIP/Postal Code</label>
                                                        <input class="form-control" name="ZIP" type="text"
                                                               value="ZIP Code"
                                                               required="">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Hotel Location Name</label>
                                                        <input class="form-control" name="ZIP" type="text"
                                                               placeholder="Location Name" required="">

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1"> Sub Brand</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Please Select</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1"> U.S State/Candian
                                                            Province</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Please Select</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1"> Country</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>Please Select</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1"> Note</label>
                                                        <textarea class="form-control" name="" id="" cols="60"
                                                                  rows="8"></textarea>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                    <div class="card mb-3 border-0">
                                                                        <div class="card-header">
                                                                            <h3> Location Information</h3>
                                                                        </div>


                                                                        <div class="card-body">

                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleFormControlSelect1">
                                                                                            Location Region</label>
                                                                                        <select class="form-control"
                                                                                                id="exampleFormControlSelect1">
                                                                                            <option>Please Select
                                                                                            </option>
                                                                                            <option>2</option>
                                                                                            <option>3</option>
                                                                                            <option>4</option>
                                                                                            <option>5</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleFormControlSelect1">
                                                                                            Hotel Type</label>
                                                                                        <select class="form-control"
                                                                                                id="exampleFormControlSelect1">
                                                                                            <option>Please Select
                                                                                            </option>
                                                                                            <option>2</option>
                                                                                            <option>3</option>
                                                                                            <option>4</option>
                                                                                            <option>5</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleFormControlSelect1">
                                                                                            Star Rating</label>
                                                                                        <select class="form-control"
                                                                                                id="exampleFormControlSelect1">
                                                                                            <option>Please Select
                                                                                            </option>
                                                                                            <option>2</option>
                                                                                            <option>3</option>
                                                                                            <option>4</option>
                                                                                            <option>5</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <button type="button"
                                                                                            class="btn btn-primary btn-chng1">
                                                                                        Edit Hotel Location
                                                                                    </button>
                                                                                </div>
                                                                            </div>

                                                                        </div>


                                                                    </div>

                                                                    <!-- end card-body -->

                                                                </div>
                                                                <!-- end card -->

                                                            </div>
                                                            <!-- end col -->

                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                            <div class="card mb-3 border-0">
                                                                <div class="card-header">
                                                                    <h3>Corporate Contact Information</h3>
                                                                </div>
                                                                <div class="add-user-icn-div">
                                                                    <a href="#"
                                                                       class="btn btn-primary btn-sm viw-btn-sh-gray">
                                                                        <i
                                                                                class="fas fa-user"></i> Add User</a>
                                                                </div>
                                                                <div class="card-body scrol-tabl-new">


                                                                    <div class="table-responsive chnag-wdt-table">
                                                                        <table class="table table-bordered">
                                                                            <thead>
                                                                            <tr>
                                                                                <th> Name</th>
                                                                                <th>Title</th>
                                                                                <th>Email</th>
                                                                                <th>Phone</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                            <tr>
                                                                                <th>
                                                                                    jon
                                                                                </th>
                                                                                <td>
                                                                                    Ranch Corporate Contact Information
                                                                                </td>
                                                                                <td>DOF@gmail.com</td>
                                                                                <td>+991357789267</td>
                                                                                <td>
                                                                                    <a href="#"
                                                                                       class="btn btn-primary btn-sm viw-btn-sh">Edit
                                                                                        Contact</a>
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
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                            <div class="card mb-3 border-0">
                                                                <div class="card-header">
                                                                    <h3>Location Contact Information</h3>
                                                                </div>
                                                                <div class="add-user-icn-div">
                                                                    <a href="#"
                                                                       class="btn btn-primary btn-sm viw-btn-sh-gray">
                                                                        <i
                                                                                class="fas fa-user"></i> Add User</a>
                                                                </div>
                                                                <div class="card-body scrol-tabl-new">


                                                                    <div class="table-responsive chnag-wdt-table">
                                                                        <table class="table table-bordered">
                                                                            <thead>
                                                                            <tr>
                                                                                <th> Name</th>
                                                                                <th>Title</th>
                                                                                <th>Email</th>
                                                                                <th>Phone</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                            <tr>
                                                                                <th>
                                                                                    jon
                                                                                </th>
                                                                                <td>
                                                                                    Ranch Corporate Contact Information
                                                                                </td>
                                                                                <td>DOF@gmail.com</td>
                                                                                <td>+991357789267</td>
                                                                                <td>
                                                                                    <a href="#"
                                                                                       class="btn btn-primary btn-sm viw-btn-sh">Edit
                                                                                        Contact</a>
                                                                                    <a href="#"
                                                                                       class="btn btn-primary btn-sm viw-btn-sh-red">Reset
                                                                                        Password</a>
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


                                                        <!-- end card -->

                                                    </div>
                                                    <!-- end col -->

                                                </div>


                                            </div>


                                        </div>
                                        <!-- end card-body -->

                                    </div>
                                </form>
                                <!-- end card -->

                            </div>
                            <!-- end col -->


                        </div>

                    </div>
                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
    </div>
@endsection