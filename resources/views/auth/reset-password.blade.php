@extends('layout.auth.app')
@section('title', "Reset Password")
@section('content')

    <!-- <div class="container h-100">
        <div class="row align-items-center justify-content-center m-2">
            <img src="{{asset('dashboard_assets/images/F&G.png')}}" alt="">
        </div>
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card" style="width: 350px; padding-bottom: 10px;">
                <h4 class="card-header" style="background-color: #002e5b !important; color: white;">Reset Password</h4>

                <div class="card-body">
                    <form data-toggle="validator" role="form" id="change-password-form">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"
                                              style="background-color: #B7A240 !important;color:white"><i
                                                class="fas fa-unlock-alt"></i></span>
                                        </div>
                                        <input type="password" id="password" data-minlength="8" name="password"
                                               class="form-control" data-error="Password to short" required="">
                                    </div>
                                    <div class="help-block with-errors text-danger"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"
                                              style="background-color: #B7A240 !important;color:white"><i
                                                class="fa fa-unlock"
                                                aria-hidden="true"></i></span>
                                        </div>
                                        <input type="password" id="password_confirmation" data-minlength="8"
                                               name="password_confirmation"
                                               class="form-control" data-error="Password to short" required="">
                                    </div>
                                    <div class="help-block with-errors text-danger"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" name="redirect" value="">
                                <input type="submit" class="btn btn-primary btn-lg btn-block"
                                       style="background-color: #002e5b!important; border-color:#002e5b; color:white"
                                       value="Update Password" name="submit">
                            </div>
                        </div>
                    </form>

                    <div class="clear"></div>

                </div>

            </div>

        </div>
    </div> -->

    <div class="main_login">
        <span class="white_sectin"></span>
    <div class="f_g_tm">
        <div class="t_mainDetail">
            <div class="auto_container">
                <div class="display_table display_table_revrs">
                <div class="t_mainDetail_left">

                    <form class="sign-in-form"  id="change-password-form">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <div class="form-full-div">
                            <h1 class="sign-txt-2">Forget Password</h1>
                        </div>
                        <div class="container">
                            <label for="uname"><sapn class="mail">Password</sapn></label>
                            <input type="password" id="password" data-minlength="8" name="password"
                                   data-error="Password to short" required>

                            <label for="psw"><sapn class="mail">Confirm Password</sapn></label>
                            <input type="password" id="password_confirmation" data-minlength="8"
                                   name="password_confirmation"
                                data-error="Password to short" required>

                            <button class="sign-btn-1" type="submit"><p>Update Password</p><span class="login-arow"><i class="fas fa-arrow-right"></i></span></button>

                        </div>

                    </form>
                </div>
                <div class="t_mainDetail_right">
                <h1 class="sign-txt-sign-in">Welcome</h1>
                               <p class="sign-para-sign-in">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>

                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection

@section('js')


    <script>
        $('form#change-password-form').on('submit', function (e) {
            e.preventDefault();

            var form = $('form#change-password-form').serialize();
            var password = $('#password').val();
            var password_confirmation = $('#password_confirmation').val();
            if (password == '') {
                window.toastr.error("Password is required");
                return;
            }
            if (password_confirmation == '') {
                window.toastr.error("Confirm Password is required");
                return;
            }
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
                url: "{{route('reset-password-post',$user->id)}}",
                data: form,
                success: function (response, status) {
                    if (response.result == 'success') {
                        $.unblockUI();
                        window.toastr.success(response.message);
                        window.location.replace("/");
                        {{--                        window.location.href="{{route('admin-dashboard')}}";--}}
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
