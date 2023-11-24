<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item {{ Route::is('admin.dashboard*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Menu</li>
        <li class="nav-item {{ Route::is('admin.login*', 'admin.login*') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#dataMaster" aria-expanded="{{ Route::is('admin.login*', 'admin.login*') ? 'true' : 'false' }}"
                aria-controls="dataMaster">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Data Master</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Route::is('admin.login*', 'admin.login*') ? 'show' : '' }}" id="dataMaster">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/buttons.html">Buttons</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Route::is('admin.users*', 'admin.user_groups*') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#userManagement" aria-expanded="{{ Route::is('admin.users*', 'admin.user_groups*') ? 'true' : 'false' }}"
                aria-controls="userManagement">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">User Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Route::is('admin.users*', 'admin.user_groups*') ? 'show' : '' }}" id="userManagement">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('admin.user_groups') }}">User Groups</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('admin.users') }}">Users</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Route::is('admin.logSystems*') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#systems" aria-expanded="{{ Route::is('admin.logSystems*') ? 'true' : 'false' }}"
                aria-controls="systems">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Systems</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Route::is('admin.logSystems*') ? 'show' : '' }}" id="systems">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('admin.logSystems') }}">Logs</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Route::is('admin.profile*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.profile', auth()->user()->kode) }}">
                <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                <span class="menu-title">Profile</span>
            </a>
        </li>
        <li class="nav-item {{ Route::is('admin.settings*','admin.module*') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="{{ Route::is('admin.settings*','admin.module*') ? 'true' : 'false' }}"
                aria-controls="settings">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Settings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Route::is('admin.settings*','admin.module*') ? 'show' : '' }}" id="settings">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('admin.settings') }}">Setting General</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('admin.module') }}">Module Management</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="d-flex align-items-center">
                            <div class="sidebar-profile-img">
                                <img src="{{template_admin('images/faces/face28.png')}}" alt="image">
                            </div>
                            <div class="sidebar-profile-text">
                                <p class="mb-1">Henry Klein</p>
                            </div>
                        </div>
                    </div>
                    <div class="badge badge-danger">3</div>
                </div>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                    <span class="menu-title">Settings</span>
                </a>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
                    <span class="menu-title">Take Tour</span></a>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                    <span class="menu-title">Log Out</span></a>
            </div>
        </li>
    </ul>
</nav>