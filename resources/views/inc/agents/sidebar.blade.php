<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="user-box">
                <div class="float-left">
                    <img src="{{ asset('upload/admin/'.Auth::user()->image) }}" alt="" class="avatar-md rounded-circle">
                </div>
                <div class="user-info">
                    <div class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           {{ Auth::user()->name }}
                        </a>
                        {{-- <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 29px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-face-profile mr-2"></i> Profile<div class="ripple-wrapper"></div></a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-settings mr-2"></i> Settings</a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-lock mr-2"></i> Lock screen</a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-power-settings mr-2"></i> Logout</a></li>
                        </ul> --}}
                    </div>
                    <p class="font-13 text-muted m-0">Agent</p>
                </div>
            </div>

            <ul class="metismenu" id="side-menu">

                <li>
                    <a href="{{ url('/agents') }}" class="waves-effect">
                        <i class="mdi-spin"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-home"></i>
                        <span> Properties </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('agents/house') }}">View All</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-home-edit"></i>
                        <span>Add Properties </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('agents/house/create') }}">Add</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-account-lock"></i>
                        <span>Profiles </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('agents/profile') }}">View</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-power-settings""></i>
                        <span>Logout </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item notify-item">
                                    <span class="text-danger">Logout</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
