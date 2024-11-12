<header class="mb-5">
    <div class="header-top">
        <div class="container">
            <div class="logo">
                <a href="{{url('/')}}">
                    <img src="{{ asset('images/adu.png') }}" class="img-fluid logo-pengaduan" alt="Logo">
                </a>
            </div>
            @if(Auth::check())
            <a href="
                @if(Auth::user()->role == 'admin')
                    {{ route('admin.index') }}
                @else
                    #
                @endif
            " class="btn btn-primary">Menuju fitur</a>
            @endif

            <div class="header-top-right">

                @if(Auth::check())
                    <div class="dropdown">
                        <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="avatar avatar-md2">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=007bff&color=ffffff" alt="Avatar">
                            </div>
                            <div class="text">
                                <h6 class="user-dropdown-name">{{ Auth::user()->name }}</h6> <!-- Display user's name -->
                                <p class="user-dropdown-status text-sm text-muted">{{ Auth::user()->role }}</p> <!-- Display user's role -->
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                            <li><a class="dropdown-item" href="#">My Account</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li> <!-- Assuming you have a named route for logout -->
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a> <!-- Button for login -->
                @endif

                <!-- Burger button responsive -->
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container d-flex justify-content-center align-items-center">
            <ul>
                <li class="menu-item {{ request()->routeIs('guest.formcomplaint') ? 'active' : '' }}">
                    <a href="{{ route('guest.formcomplaint') }}" class='menu-link'>
                        <div><i class="bi bi-card-checklist fs-5 me-2"></i> Form Pengaduan</div>
                    </a>
                </li>  

                <li class="menu-item {{ request()->routeIs('guest.complaints') ? 'active' : '' }}">
                    <a href="{{ route('guest.complaints') }}" class='menu-link'>
                        <div><i class="bi bi-newspaper fs-5 me-2"></i> Semua Pengaduan</div>
                    </a>
                </li>                         

                <li class="menu-item {{ request()->routeIs('guest.statistics') ? 'active' : '' }}">
                    <a href="{{ route('guest.statistics') }}" class='menu-link'>
                        <div><i class="bi bi-graph-up fs-5 me-2"></i> Data Statistik</div>
                    </a>
                </li>                         
            </ul>
        </div>
    </nav>
</header>