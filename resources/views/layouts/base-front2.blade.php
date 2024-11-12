
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Sistem Informasi Pengaduan')</title>
    <link rel="shortcut icon" href="{{ asset('images/cs.png') }}" type="image/x-icon">
    @yield('css')
    <link rel="stylesheet" href="{{asset('mazer/assets/compiled/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('mazer/assets/compiled/css/app-dark.css')}}">
    <link rel="stylesheet" href="{{asset('mazer/assets/compiled/css/iconly.css')}}">
    <style>

        .logo-pengaduan{
            width: 160px;
            height: auto !important;
        }

        .menu-item {
            /* Gaya dasar untuk setiap item menu */
            margin: 0 15px; /* Spasi antar item */
        }

        .menu-link {
            text-decoration: none; /* Menghapus garis bawah */
            color: #000; /* Warna teks default */
            padding: 10px 15px; /* Padding untuk area klik */
            transition: color 0.3s; /* Transisi halus saat hover */
        }

        .menu-item.active .menu-link {
            color: #007bff; /* Warna teks saat aktif */
            font-weight: bold; /* Menebalkan teks saat aktif */
        }

        /* Gaya saat hover */
        .menu-link:hover {
            color: #0056b3; /* Warna saat hover */
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

    </style>
</head>

<body>
    <script src="{{asset('mazer/assets/static/js/initTheme.js')}}"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            
        @include('includes.front.navbar')

            <div class="content-wrapper container">
                
            @yield('content')

            </div>
            @include('includes.front.footer')            
        </div>
    </div>
    <script src="{{asset('mazer/assets/static/js/pages/horizontal-layout.js')}}"></script>
    <script src="{{asset('mazer/assets/static/js/components/dark.js')}}"></script>
    <script src="{{asset('mazer/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('mazer/assets/compiled/js/app.js')}}"></script>
    <script src="{{asset('mazer/assets/static/js/pages/dashboard.js')}}"></script>
    @yield('js')
</body>
</html>