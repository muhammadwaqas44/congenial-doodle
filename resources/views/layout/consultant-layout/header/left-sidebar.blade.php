<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">


        <div id="sidebar-menu">

            <ul>
                <li class="submenu">

                    @can('viewConsultant', App\User::class)
                        <a @if(Request::route()->getName() == 'consultant-dashboard') class="active"
                           @else class="" @endif href="{{route('consultant-dashboard')}}"><i
                                class="fas fa-tachometer-alt"></i><span> Dashboard </span>
                        </a>
                    @endcan

                </li>
                <li class="submenu">

                @can('viewConsultant', App\User::class)
                    <li>
                        <a @if(Request::route()->getName() == 'active-visit') class="active"
                           @else class="" @endif href="{{route('active-visit')}}">
                            <i class="far fa-building"></i><span> Active Evaluations </span>
                        </a>
                    </li>
                    <li>
                        <a @if(Request::route()->getName() == 'pending-visit') class="active"
                           @else class="" @endif href="{{route('pending-visit')}}">
                            <i class="fas fa-cubes"></i><span> Pending Evaluations </span>
                        </a>

                    </li>
                @endcan

            </ul>

            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>


    </div>

</div>
