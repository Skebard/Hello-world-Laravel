<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/dashboard">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name">Admin Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">



                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Home</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('home.slider') }}">
                                    <span class="nav-text">Slider</span>

                                </a>
                            </li>

                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('home.about') }}">
                                    <span class="nav-text">Home About</span>

                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ url('services') }}">
                                    <span class="nav-text">Services</span>
                                </a>
                            </li>

                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('multi.image')}}">
                                    <span class="nav-text">Home Portfolio</span>

                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('all.brand') }}">
                                    <span class="nav-text">Home Brand</span>

                                </a>
                            </li>










                        </div>
                    </ul>
                </li>





                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">Contact Page</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                        <div class="sub-menu">


                            <li class="active">
                                <a class="sidenav-item-link" href="{{route('admin.contact')}}">
                                    <span class="nav-text">Contact Profile</span>

                                </a>
                            </li>


                            <li class="active">
                                <a class="sidenav-item-link" href="{{route('admin.message')}}">
                                    <span class="nav-text">Contact Message</span>

                                </a>
                            </li>




                        </div>
                    </ul>
                </li>

                <li class="">
                    <a class="sidenav-item-link" href="/" target="_blank">
                    <i class="far fa-eye"></i>
                        <span class="nav-text">View page</span>
                    </a>



            </ul>

        </div>

        <hr class="separator" />

    </div>
</aside>