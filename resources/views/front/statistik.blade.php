@extends('layouts.base-front2')

@section('title','Data Statistik Pengaduan')

@section('content')
<div class="page-heading">
    <h3>Laporan Jumlah Pengaduan</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="bi-chat"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Total Pengaduan</h6>
                                    <h6 class="font-extrabold mb-0">{{ $all }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="bi-hourglass" style="animation: spin 3s linear infinite;"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Pending</h6>
                                    <h6 class="font-extrabold mb-0">{{ $pending }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="bi-arrow-repeat" style="animation: spin 3s linear infinite;"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Diproses</h6>
                                    <h6 class="font-extrabold mb-0">{{ $process }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="bi-check-circle"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Selesai</h6>
                                    <h6 class="font-extrabold mb-0">{{ $done }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="card">
        <div class="card-header">
            <h4>Statistik Pengaduan</h4>
        </div>
        <div class="card-body">
            <div id="chart-pengaduan"></div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{asset('mazer/assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
    <script>
        var options = {
            series: [<?= $pending; ?>, <?= $process; ?>, <?= $done; ?>],
            chart: {
                type: 'pie',
                height: 350
            },
            labels: ['Pending', 'Diproses', 'Selesai'],
            colors: ['#ff7976', '#57caeb', '#5ddab4'],
            legend: {
                position: 'bottom',
                horizontalAlign: 'center'
            }
        };
        var chart = new ApexCharts(document.querySelector("#chart-pengaduan"), options);
        chart.render();
    </script>
@endsection