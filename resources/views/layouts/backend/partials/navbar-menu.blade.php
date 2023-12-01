  <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="#" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="#" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="#" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="#" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="#" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="#" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('dashboard')}}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="mdi mdi-speedometer"></i> <span data-key="t-dashboards">{{__('dashboard.dashboards')}}</span>
                            </a>
                        </li> <!-- end Dashboard Menu -->
                    
                    @if(\Request::user('web')->hasPermission('app.roles.index'))
                      <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarUsers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUsers">
                           <span data-key="t-roles">Admin</span>
                        </a>
                         <div class="collapse menu-dropdown" id="sidebarUsers">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{!! url('/admins') !!}" class="nav-link" data-key="t-roles">Userat</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{!! url('/roles') !!}" class="nav-link" data-key="t-roles">Rolet</a>
                                </li>
                            </ul>
                          
                        </div>
                    </li>
                    @endif <!-- End Admin Menu -->
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarApplications" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApplications">
                           <span data-key="t-roles">Aplikimet</span>
                        </a>
                         <div class="collapse menu-dropdown" id="sidebarApplications">
                            <ul class="nav nav-sm flex-column">                          
                            <li class="nav-item">
                                <a href="{{ route('all_applications') }}" class="nav-link" data-key="t-roles">Te gjithe Applikimet</a>
                            </li> 
                            <li class="nav-item">
                                <a href="{{route('newApplication')}}" class="nav-link" data-key="t-roles">Aplikimet e Reja</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('confirmedApplication') }}" class="nav-link" data-key="t-roles">Aplikimet e Konfirmuara</a>
                            </li> 
                            <li class="nav-item">
                                <a href="{{ route('unconfirmedApplication') }}" class="nav-link" data-key="t-roles">Aplikimet e Anulluara</a>
                            </li> 
                            <li class="nav-item">
                                <a href="{{route('paidApplication')}}" class="nav-link" data-key="t-roles">Aplikimet e Paguara</a>
                            </li>
                             
                            </ul>                   
                        </div>
                    </li>
                    <!-- End Aplikimet Menu -->
                    
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->