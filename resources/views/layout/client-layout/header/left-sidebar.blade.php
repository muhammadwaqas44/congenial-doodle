<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">


        <div id="sidebar-menu">

            <ul>
                <li class="submenu">

                    @can('viewClient', App\User::class)
                        <a @if(Request::route()->getName() == 'client-dashboard') class="active"
                           @else class="" @endif href="{{route('client-dashboard')}}"><i
                                class="fas fa-tachometer-alt"></i><span> Dashboard </span>
                        </a>
                    @endcan
                </li>
                @can('viewClient', App\User::class)
                    <li>
                        <a @if(Request::route()->getName() == 'scheduleListingClient') class="active"
                           @else class="" @endif href="{{route('scheduleListingClient')}}">
                            <i class="far fa-building"></i><span>  Schedule Visits</span></a>
                    </li>
{{--                    <li>--}}
{{--                        <a @if(Request::route()->getName() == 'pending-visit-editor') class="active"--}}
{{--                           @else class="" @endif href="{{route('pending-visit-editor')}}">--}}
{{--                            <i class="fas fa-cubes"></i><span> Pending Visits </span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                @endcan
            </ul>

            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>


    </div>

</div>
