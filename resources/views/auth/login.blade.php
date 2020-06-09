@extends('layout.auth.app')
@section('title', "Login")
@section('content')

    <!-- <div class="container h-100">
        <div class="row align-items-center justify-content-center m-2">
            <img src="{{asset('dashboard_assets/images/F&G.png')}}" alt="">
        </div>
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card" style="width: 350px; padding-bottom: 20px;">
                <h4 class="card-header" style="background-color: #002e5b !important; color: white;">Login</h4>

                <div class="card-body">

                    <form data-toggle="validator" role="form" id="sign-in-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Login Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                  style="background-color: #B7A240!important; color:white"><i
                                                        class="far fa-envelope-open"></i></span>
                                        </div>
                                        <input type="email" class="form-control" name="email"
                                               data-error="Input valid email" required>
                                    </div>
                                    <div class="help-block with-errors text-danger"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text"
                                              style="background-color: #B7A240 !important;color:white"><i
                                                    class="fa fa-unlock"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                        <input type="password" id="inputPassword" data-minlength="6"
                                               name="password"
                                               class="form-control" data-error="Password to short" required>
                                    </div>
                                    <div class="help-block with-errors text-danger"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox_remember" type="checkbox" name="remember">
                                <label for="checkbox_remember"> Remember me</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                {{--                                <input type="hidden" name="redirect" value="">--}}
                                <input type="submit" class="btn btn-primary btn-lg btn-block"
                                       style="background-color: #002e5b!important; border-color:#002e5b; color:white"
                                       value="Login" name="submit">
                            </div>
                        </div>
                    </form>

                    <div class="clear"></div>

                    <i class="fa fa-undo fa-fw"></i> Forgot password? <a href="{{route('forget-password')}}">Reset
                        password</a>

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
                <form class="sign-in-form" data-toggle="validator" role="form" id="sign-in-form">
                    @csrf
                        <div class="form-full-div">
                            <h1 class="sign-txt-2">Log In</h1>
                        </div>
                        <div class="container">
                          <label for="uname"><sapn class="mail">Email</sapn></label>
                          <input type="email" name="email" placeholder="Enter Email"
                                 data-error="Input valid email"  required>

                          <label for="psw"><sapn class="mail">Password</sapn></label>
                          <input type="password" placeholder="Enter Password" id="inputPassword" data-minlength="6"
                                 name="password" required>
                          <label>
                                <input id="checkbox_remember" type="checkbox" name="remember"> Remember me
                              </label>
                          <button class="sign-btn-1" type="submit"><p>Login</p> <span class="login-arow"><i class="fas fa-arrow-right"></i></span></button>

                          <span class="psw">Forgot <a href="{{route('forget-password')}}">Password?</a></span>
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
        $('form#sign-in-form').on('submit', function (e) {
            e.preventDefault();
            var form = $('form#sign-in-form').serialize();
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
                url: "{{route('login-post')}}",
                data: form,
                success: function (response, status) {
                    if (response.result == 'success') {
                        $.unblockUI();
                        window.toastr.success(response.message);
                        // window.location.reload();
                        if (response.role == 1) {
                            window.location.href = "{{route('admin-dashboard')}}";
                        }
                        if (response.role == 2) {
                            window.location.href = "{{route('consultant-dashboard')}}";
                        }
                        if (response.role == 3) {
                            window.location.href = "{{route('editor-dashboard')}}";
                        }
                        if (response.role == 4) {
                            window.location.href = "{{route('client-dashboard')}}";
                        }

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
