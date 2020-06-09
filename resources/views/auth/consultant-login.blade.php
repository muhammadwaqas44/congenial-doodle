@extends('layout.auth.app')
@section('title', "Consultant Login")
@section('content')

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
                url: "{{route('login-consultant-post')}}",
                data: form,
                success: function (response, status) {
                    if (response.result == 'success') {
                        $.unblockUI();
                        window.toastr.success(response.message);

                        setTimeout(function () {
                            window.location.href = "{{route('consultant-dashboard')}}";
                        }, 1000);
                    } else if (response.result == 'no_role') {
                        $.unblockUI();
                        window.toastr.error(response.message);
                        setTimeout(function () {
                            window.location.href = "{{route('consultant-view')}}";
                        }, 3000);

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
