<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">


        <div id="sidebar-menu">

            <ul>
                <li class="submenu">
                    <a @if(Request::route()->getName() == 'admin-dashboard') class="active"
                       @else class="" @endif href="{{route('admin-dashboard')}}"><i
                            class="fas fa-tachometer-alt"></i><span> Dashboard </span>
                    </a>
                </li>
                @can('viewAny', App\User::class)
                    <li class="submenu">
                        <a @if(Request::route()->getName() == 'admin-listing') class="active open"
                           @elseif(Request::route()->getName() == 'consultant-listing') class="active open"
                           @elseif (Request::route()->getName() == 'editor-listing') class=" active open"
                           @elseif (Request::route()->getName() == 'clients-listing') class=" active open"
                           @elseif (Request::route()->getName() == 'add-user') class=" active open"
                           @else class="" @endif><i class="fas fa-users"></i> <span> Users </span> <span
                                class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a @if(Request::route()->getName() == 'admin-listing') class="active"
                                   @else class="" @endif href="{{route('admin-listing')}}">Admin</a></li>
                            <li><a @if(Request::route()->getName() == 'consultant-listing') class="active"
                                   @else class="" @endif href="{{route('consultant-listing')}}">Consultants</a></li>
                            <li><a @if(Request::route()->getName() == 'editor-listing') class="active"
                                   @else class="" @endif href="{{route('editor-listing')}}">Editor</a></li>
                            {{--<li><a @if(Request::route()->getName() == 'clients-listing') class="active"--}}
                            {{--@else class="" @endif href="{{route('clients-listing')}}">Clients</a></li>--}}
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#" @if(Request::route()->getName() == 'company-listing') class="active open"
                           @elseif(Request::route()->getName() == 'add-company') class="active open"
                           @else class="" @endif ><i class="far fa-building"></i><span> Companies </span> <span
                                class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a @if(Request::route()->getName() == 'add-company') class="active"
                                   @else class="" @endif href="{{route('add-company')}}">
                                    Add New Company
                                </a></li>
                            <li><a @if(Request::route()->getName() == 'company-listing') class="active"
                                   @else class="" @endif href="{{route('company-listing')}}">Companies Listing</a></li>
                            {{--<li><a @if(Request::route()->getName() == 'hotels-listing') class="active"--}}
                            {{--@else class="" @endif href="{{route('hotels-listing')}}">Hotel Listing</a></li>--}}
                        </ul>
                    </li>
                    <li class="submenu">
                        <a @if(Request::route()->getName() == 'service-listing') class="active open"
                           @elseif(Request::route()->getName() == 'add-hotel-brand') class="active open"
                           @elseif(Request::route()->getName() == 'hotels-listing') class="active open"
                           @elseif(Request::route()->getName() == 'addHotelLocation') class="active open"
                           @elseif(Request::route()->getName() == 'subBrandListing') class="active open"
                           @elseif(Request::route()->getName() == 'allHotelLocation') class="active open"
                           @else class="" @endif href="#"><i class="fas fa-boxes"></i> <span> Hotel Brand </span>
                            <span
                                class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a @if(Request::route()->getName() == 'add-hotel-brand') class="active"
                                   @else class="" @endif href="{{route('add-hotel-brand')}}">Add Hotel Brand</a></li>
                            <li><a @if(Request::route()->getName() == 'hotels-listing') class="active"
                                   @else class="" @endif href="{{route('hotels-listing')}}">Hotel Brands</a></li>
                            <li><a @if(Request::route()->getName() == 'subBrandListing') class="active"
                                   @else class="" @endif href="{{route('subBrandListing')}}">Sub Brands</a></li>
                            <li><a @if(Request::route()->getName() == 'addHotelLocation') class="active"
                                   @else class="" @endif href="{{route('addHotelLocation')}}">Add Hotel Location</a>
                            </li>
                            <li><a @if(Request::route()->getName() == 'allHotelLocation') class="active"
                                   @else class="" @endif href="{{route('allHotelLocation')}}">Hotel Location Listing</a>
                            </li>
                            </li>
                        </ul>
                    </li>


                    <li class="submenu">
                        <a @if(Request::route()->getName() == 'lodging-listing') class="active open"
                           @elseif(Request::route()->getName() == 'sub-outlets-listing') class="active open"
                           @elseif(Request::route()->getName() == 'package-listing') class="active open"
                           @elseif(Request::route()->getName() == 'add-package') class="active open"
                           @else class="" @endif href="#"><i class="fas fa-cubes"></i> <span> Categories </span>
                            <span
                                class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a @if(Request::route()->getName() == 'lodging-listing') class="active"
                                   @else class="" @endif  href="{{route('lodging-listing')}}">Lodging / Narratives
                                    Categories</a></li>
                            <li><a @if(Request::route()->getName() == 'outlets-listing') class="active"
                                   @else class="" @endif href="{{route('outlets-listing')}}">Outlets Categories</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a @if(Request::route()->getName() == 'addVisitSchedule') class="active open"
                           @elseif(Request::route()->getName() == 'scheduleCompleteListing') class="active open"
                           @elseif(Request::route()->getName() == 'scheduleListing') class="active open"
                           @else class="" @endif href="#"><i class="far fa-calendar-alt"></i><span> Scheduling </span>
                            <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            {{--<li><a @if(Request::route()->getName() == 'calender') class="active"--}}
                            {{--@else class="" @endif  href="{{route('calender')}}">Calendar</a></li>--}}
                            <li><a @if(Request::route()->getName() == 'addVisitSchedule') class="active"
                                   @else class="" @endif  href="{{route('addVisitSchedule')}}">Add Visit Schedule</a>
                            </li>
                            <li><a @if(Request::route()->getName() == 'scheduleListing') class="active"
                                   @else class="" @endif  href="{{route('scheduleListing')}}"> Visits Schedule
                                    Listing</a></li>
                            <li><a @if(Request::route()->getName() == 'scheduleCompleteListing') class="active"
                                   @else class="" @endif  href="{{route('scheduleCompleteListing')}}">Complete Visits
                                    Schedule
                                    Listing</a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a @if(Request::route()->getName() == 'report') class="active open"
                           @elseif(Request::route()->getName() == 'compareForm') class="active open"
                           @else class="" @endif href="#"><i class="fab fa-readme"></i> <span> Reports </span> <span
                                class="menu-arrow"></span></a>
                        <ul class="list-unstyled">

                            <li><a @if(Request::route()->getName() == 'report') class="active"
                                   @else class="" @endif  href="{{route('report')}}">Visit Schedules Listing</a></li>
                            <li><a @if(Request::route()->getName() == 'compareForm') class="active"
                                   @else class="" @endif  href="{{route('compareForm')}}">Compare Report</a>
                            </li>
                        </ul>
                    </li>

                @endcan

            </ul>

            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>


    </div>

</div>
