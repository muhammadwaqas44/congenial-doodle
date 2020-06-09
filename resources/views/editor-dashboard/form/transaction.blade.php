@extends('layout.editor-layout.dashboard')

@section('title')
    Add Transaction
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
                                <h3> Add Transaction</h3>
                            </div>

                            <div class="card-body">
                                <form id="transaction-form" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">

                                        <div class="col-lg-12 col-xl-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label> Image </label>
                                                        <input type="file" class="form-control" name="file" accept="image/*" id="profile_image" onchange="uploadFile(this,this.id)">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label> Server </label>
                                                        <input type="text" class="form-control" name="serverName" placeholder="Please add server name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Transaction Date and Time</label>
                                                        <input class="form-control" id="datetimepickerVisit" type="text" name="time" autocomplete="off" placeholder="Select a Date">

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Transaction Amount</label>
                                                        <input class="form-control"  type="text" name="amount" autocomplete="off" placeholder="Please add amount" onkeypress="return isNumberKey(event)" />

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Amount Paid</label>
                                                        <input class="form-control" type="text" name="amount_paid" autocomplete="off" placeholder="Please add paid amount" onkeypress="return isNumberKey(event)">

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Transaction check Number</label>
                                                        <input class="form-control"  type="text" name="transaction_check_number" autocomplete="off" placeholder="Please add check number" onkeypress="return isNumberKey(event)" />

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Payment Method</label>
                                                        <select class="form-control" id="oo_trans_pay_by" name="payment_method" required>
                                                            <option value="" SELECTED>Please Select</option>
                                                            <option value="Cash">Cash</option>
                                                            <option value="Credit Card">Credit Card</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Promotion/Coupon Used</label>
                                                        <select class="form-control" id="oo_trans_coupon" name="coupon" required>
                                                            <option value="" SELECTED>Please Select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label> Note</label>
                                                        <textarea class="form-control" name="notes" id="your_textarea"
                                                                  cols="60"
                                                                  rows="8"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-primary btn-chng1">
                                                        Add Transaction
                                                    </button>

                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                </form>

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
    <script>
        jQuery('#datetimepickerVisit').datetimepicker({
            timepicker:false,
            format:'y-m-d',
        });
        function isNumberKey(evt) {      //onkeypress="return isNumberKey(event)"
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            } else {
                return true;
            }
        }
        function isCharacterKey(evt) {      //onkeypress="return isCharacterKey(event)"
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if ((charCode < 65 || charCode > 90) &&
                (charCode < 97 || charCode > 122 ) && charCode !=32 ){
                return false;
            } else {
                return true;
            }
        }
        function uploadFile(input,id) {
            if (input.files && input.files[0]) {
                var fileName = input.files[0].name;
                var filesize = input.files[0].size;
                var extention = fileName.split('.').pop().toLowerCase();
                if(extention == 'png' || extention == 'jpg' || extention == 'jpeg')
                {
                    console.log(filesize);
                    if (filesize < 5300000){

                    }else{
                        $('#'+id).val('');
                        window.toastr.error("Please upload a file less then 5MB");
                    }
                }else{
                    $('#'+id).val('');
                    window.toastr.error("Please upload only png/jpg/jpeg or pdf file");
                }
            }
        }
    </script>
    <script>

        $('form#transaction-form').on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
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
            });
            $.ajax({
                type: 'POST',
                url: "{{route('transaction-post-editor', $scheduleId)}}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (response, status) {
                    if (response.result == 'success') {
                        $.unblockUI();
                        window.toastr.success(response.message);
                        setTimeout(function () {
                            window.location.reload();
                        }, 1000);
                    } else if (response.result == 'error') {
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



        });
    </script>
@endsection
