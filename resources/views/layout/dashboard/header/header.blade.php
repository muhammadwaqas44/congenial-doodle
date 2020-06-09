<div class="headerbar">

    <!-- LOGO -->
    <div class="headerbar-left">
        <a href="{{url('/')}}" class="logo"><img alt="Logo" src="{{asset('dashboard_assets/images/F&G.png')}}"/>
            <span><img src="{{asset('dashboard_assets/images/F&G Text.png')}}" alt=""></span></a>
    </div>

    <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" id="bell-icon" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="far fa-bell"></i><span class="notif-bullet" ><span class="notify-number"></span></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>
                                        <small><span class="label label-danger pull-xs-right notify-number2"></span>Alerts</small>
                                    </h5>
                                </div>
                                <span class="single-notifi">

                                </span>
                                <!-- All-->
                                <a href="{{route('read-all-admin-notifications')}}" class="dropdown-item notify-item notify-all">
                                    Read All
                                </a>

                            </div>
                        </li>

            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img
                        src="{{asset(isset(auth()->user()->profile_image)?auth()->user()->profile_image :'dashboard_assets/images/avatars/admin.png')}}"
                        alt="Profile image"
                        class="avatar-rounded">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow">

                            <small>Hello, {{auth()->user()->name}}</small>


                        </h5>
                    </div>

                    <!-- item-->
                        <a href="{{route('edit-profile-admin')}}" class="dropdown-item notify-item">
                            <i class="fa fa-user"></i> <span>Profile</span>
                        </a>

                <!-- item-->
                    <a href="{{route('logout')}}" class="dropdown-item notify-item">
                        <i class="fa fa-power-off"></i> <span>Logout</span>
                    </a>
                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </li>
        </ul>

    </nav>

</div>
