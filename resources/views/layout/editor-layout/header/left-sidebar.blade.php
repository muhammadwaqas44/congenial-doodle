<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">


        <div id="sidebar-menu">

            <ul>
                <li class="submenu">

                    @can('viewEditor', App\User::class)
                        <a @if(Request::route()->getName() == 'editor-dashboard') class="active"
                           @else class="" @endif href="{{route('editor-dashboard')}}"><i
                                class="fas fa-tachometer-alt"></i><span> Dashboard </span>
                        </a>
                    @endcan

                </li>


                @can('viewEditor', App\User::class)
                    <li>
                        <a @if(Request::route()->getName() == 'active-visit-editor') class="active"
                           @else class="" @endif href="{{route('active-visit-editor')}}">
                            <i class="far fa-building"></i><span>   Active Visits</span></a>
                    </li>
                    <li>
                        <a @if(Request::route()->getName() == 'pending-visit-editor') class="active"
                           @else class="" @endif href="{{route('pending-visit-editor')}}">
                            <i class="fas fa-cubes"></i><span> Pending Visits </span>
                        </a>
                    </li>
                @endcan

            </ul>

            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>


    </div>

</div>
