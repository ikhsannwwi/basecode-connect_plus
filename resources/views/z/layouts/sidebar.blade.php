<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a
                href="/">{{ array_key_exists('nama_app_admin', $settings) ? $settings['nama_app_admin'] : '' }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">
                <?php
                $namaText = array_key_exists('nama_app_admin', $settings) ? $settings['nama_app_admin'] : '';
                $twoInitialChars = strtoupper(substr($namaText, 0, 2));
                echo $twoInitialChars;
                ?>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Route::is('admin.dashboard*') ? 'active' : '' }}"><a class="nav-link" href="blank.html"><i class="fas fa-columns"></i><span>Dashboard</span></a></li>
            <li class="menu-header">Menu</li>
            <li class="dropdown {{ Route::is('admin.login*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-database"></i>
                    <span>Data Master</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('admin.login')}}">Default Layout</a></li>
                </ul>
            </li>
            <li class="dropdown {{ Route::is('admin.users*','admin.user_groups*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users-cog"></i>
                    <span>User Management</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Route::is('admin.user_groups*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.user_groups')}}">User Group</a></li>
                    <li class="{{ Route::is('admin.users*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.users')}}">User</a></li>
                </ul>
            </li>
            <li class="dropdown {{ Route::is('admin.logSystems*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-bezier-curve"></i>
                    <span>Systems</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Route::is('admin.logSystems*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.logSystems')}}">Logs</a></li>
                </ul>
            </li>
            <li class="{{ Route::is('admin.profile*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.profile',auth()->user()->kode)}}"><i class="fas fa-solid fa-user"></i> <span>Profile</span></a></li>
            <li class="dropdown {{ Route::is('admin.settings*','admin.module*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-cogs"></i> <span>Settings</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Route::is('admin.settings*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.settings')}}">Setting General</a></li>
                    <li class="{{ Route::is('admin.module*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.module')}}">Module Management</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
