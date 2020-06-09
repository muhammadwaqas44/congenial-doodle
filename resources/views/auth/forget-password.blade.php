@extends('layout.auth.app')
@section('title', "Forget Password")
@section('content')

    <!-- <div class="container h-100">
        <div class="row align-items-center justify-content-center m-2">
            <img src="{{asset('dashboard_assets/images/F&G.png')}}" alt="">
        </div>
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card" style="width: 350px; padding-bottom: 10px;">
                <h4 class="card-header" style="background-color: #002e5b !important; color: white;">Forget Password</h4>

                <div class="card-body">

                    <form data-toggle="validator" role="form" id="forget-password-form">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                  style="background-color: #B7A240!important; color:white"><i
                                                    class="far fa-envelope-open"></i></span>
                                        </div>
                                        <input type="email" class="form-control" name="email"
                                               data-error="Input valid email" required="">
                                    </div>
                                    <div class="help-block with-errors text-danger"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
{{--                                <input type="hidden" name="redirect" value="">--}}
        <input
                type="submit" class="btn btn-primary btn-lg btn-block"
                style="background-color: #002e5b!important; border-color:#002e5b; color:white"
                value="Password Reset" name="submit">
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
                            <form class="sign-in-form" id="forget-password-form">
                                @csrf
                                <div class="form-full-div">
                                    <h1 class="sign-txt-2">Forget Password</h1>
                                </div>
                                <div class="container">
                                    <label for="email">
                                        <sapn class="mail">Email</sapn>
                                    </label>
                                    <input type="email" placeholder="Email" name="email" required>
                                    <a href="reset-password">
                                        <button class="sign-btn-1" type="submit"><p>Reset Password</p> <span
                                                class="login-arow"><i class="fas fa-arrow-right"></i></span></button>
                                    </a>

                                </div>

                            </form>
                        </div>
                        <div class="t_mainDetail_right">
                            <h1 class="sign-txt-sign-in">Welcome</h1>
                            <p class="sign-para-sign-in">It is a long established fact that a reader will be distracted
                                by the readable content of a page when looking at its layout. The point of using Lorem
                                Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                using.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $('form#forget-password-form').on('submit', function (e) {
            e.preventDefault();
            var form = $('form#forget-password-form').serialize();
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
                url: "{{route('forget-password')}}",
                data: form,
                success: function (response, status) {
                    if (response.result == 'success') {
                        $.unblockUI();
                        window.toastr.success(response.message);
                        window.location.reload();
                        {{--setTimeout(function () {--}}
                        {{--    window.location.href = "{{route('login-view')}}";--}}
                        {{--},3000);--}}

                    } else if (response.result == 'error') {
                        $.unblockUI();
                        window.toastr.error(response.message);
                        window.location.reload();
                        {{--setTimeout(function () {--}}
                        {{--    window.location.href = "{{route('login-view')}}";--}}
                        {{--},3000);--}}
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
