<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>  
    <link rel="shortcut icon" href="{{ asset('images/cs.png') }}" type="image/x-icon">
     <link rel="stylesheet" href="{{asset('mazer/assets/compiled/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('mazer/assets/compiled/css/app-dark.css')}}">
    <link rel="stylesheet" href="{{asset('mazer/assets/compiled/css/iconly.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        .logo-pengaduan{
            width: 160px;
            height: auto !important;
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
        @include('includes.sidebar')
        <div id="main" class="layout-navbar navbar-fixed">
            @include('includes.navbar')            
            <div id="main-content">
                @yield('content')
            </div>
            @include('includes.footer')
        </div>
    </div>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="{{asset('mazer/assets/static/js/components/dark.js')}}"></script>
    <script src="{{asset('mazer/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('mazer/assets/compiled/js/app.js')}}"></script>
    <script src="{{asset('mazer/assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('mazer/assets/static/js/pages/dashboard.js')}}"></script>
    
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        })
    </script>

</body>
</html>