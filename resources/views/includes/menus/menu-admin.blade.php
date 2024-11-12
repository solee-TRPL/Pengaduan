<li
    {{-- ternary operator -> variable = condition ? true : false --}}
    class="sidebar-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">  
    <a href="{{ route('admin.index') }}" class='sidebar-link'>
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
    </a>
</li>

<li
    class="sidebar-item has-sub {{ request()->routeIs('admin.all.complaints') || request()->routeIs('admin.all.pending.complaints') || request()->routeIs('admin.all.process.complaints') || request()->routeIs('admin.all.success.complaints') ? 'active' : '' }}">
    <a href="" class='sidebar-link'>
        <i class="bi bi-megaphone-fill"></i>
        <span>Lihat Pengaduan</span>
    </a>

    <ul class="submenu submenu-closed" style="--submenu-height: 215px;">
        <li class="submenu-item {{ request()->routeIs('admin.all.complaints') ? 'active' : '' }}">
            <a href="{{ route('admin.all.complaints') }}" class="submenu-link">Semua Pengaduan</a>
        </li>
        <li class="submenu-item {{ request()->routeIs('admin.all.pending.complaints') ? 'active' : '' }}">
            <a href="{{ route('admin.all.pending.complaints') }}" class="submenu-link">Pending</a>
        </li>
        <li class="submenu-item {{ request()->routeIs('admin.all.process.complaints') ? 'active' : '' }}">
            <a href="{{ route('admin.all.process.complaints') }}" class="submenu-link">Proses</a>
        </li>
        <li class="submenu-item {{ request()->routeIs('admin.all.success.complaints') ? 'active' : '' }}">
            <a href="{{ route('admin.all.success.complaints') }}" class="submenu-link">Selesai</a>
        </li>
    </ul>

</li>

<li
    class="sidebar-item {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
    <a href="{{ route('admin.users.index') }}" class='sidebar-link'>
        <i class="bi bi-people-fill"></i>
        <span>Master User</span>
    </a>
</li>