<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admincinema/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        @php($route = request()->route()->getName())
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview {{ in_array($route, [ADMIN_MOVIE_INDEX, ADMIN_MOVIE_CREATE, ADMIN_MOVIE_EDIT]) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ in_array($route, [ADMIN_MOVIE_INDEX, ADMIN_MOVIE_CREATE, ADMIN_MOVIE_EDIT]) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Quản lý phim
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="{{ route(ADMIN_MOVIE_INDEX) }}" class="nav-link {{ in_array($route, [ADMIN_MOVIE_INDEX]) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route(ADMIN_MOVIE_CREATE) }}" class="nav-link {{ in_array($route, [ADMIN_MOVIE_CREATE]) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Quản lý phòng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route(ADMIN_ROOM_INDEX) }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route(ADMIN_ROOM_CREATE) }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview {{ in_array($route, [ADMIN_SHOWTIME_INDEX, ADMIN_SHOWTIME_CREATE, ADMIN_SHOWTIME_EDIT]) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ in_array($route, [ADMIN_SHOWTIME_INDEX, ADMIN_SHOWTIME_CREATE, ADMIN_SHOWTIME_EDIT]) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Quản lý lịch chiếu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route(ADMIN_SHOWTIME_INDEX) }}" class="nav-link {{ in_array($route, [ADMIN_SHOWTIME_INDEX]) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route(ADMIN_SHOWTIME_CREATE) }}" class="nav-link {{ in_array($route, [ADMIN_SHOWTIME_CREATE]) ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
