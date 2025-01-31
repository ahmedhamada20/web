<div class="topbar">

    <div class="topbar-left	d-none d-lg-block">
        <div class="text-center">
            <a href="{{route('admin')}}" class="logo"><img src="{{ asset('assets/images/logo.png') }}" height="22" alt="logo"></a>
        </div>
    </div>

    <nav class="navbar-custom">



        <ul class="list-inline float-right mb-0">
            <li class="list-inline-item dropdown notification-list">

            </li>

            <li class="list-inline-item dropdown notification-list">

                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg dropdown-menu-animated">
                    <!-- item-->


                    <div class="slimscroll-noti">
                        <!-- item-->


                    </div>


                    <!-- All-->


                </div>
            </li>


            <li class="list-inline-item dropdown notification-list nav-user">
                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('dash/assets/images/users/avatar-6.jpg')}}" alt="user" class="rounded-circle">
                    <span class="d-none d-md-inline-block ml-1">Admin <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">

                    <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="list-inline-item">
                <button type="button" class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
            <li class="list-inline-item dropdown notification-list d-none d-sm-inline-block">

            </li>
            <li class="list-inline-item notification-list d-none d-sm-inline-block">

            </li>

        </ul>


    </nav>

</div>
