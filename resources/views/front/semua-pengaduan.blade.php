@extends('layouts.base-front2')

@section('title', 'Semua Pengaduan')

@section('css')
    <link rel="stylesheet" href="{{ asset('mazer/assets/extensions/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/table-datatable.css') }}">
    <style>
    .card {
        margin-top: 20px;
    }
    .table {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        width: 100%;
        margin: auto;
        border-collapse: collapse;
    }
    .table th, .table td {
        vertical-align: middle;
        text-align: center;
        padding: 15px;
        border-bottom: 1px solid #e0e0e0;
    }
    .table th {
        background-color: #007bff; /* Solid color for the header */
        color: white;
        font-size: 1.1em;
        font-weight: bold;
        text-transform: uppercase;
        text-align: center !important; /* Center text in header */
    }
    .table tr:nth-child(even) {
        background-color: #f9f9f9; /* Light gray for even rows */
    }
    .table tr:hover {
        background-color: #e7f3ff; /* Light blue on hover */
        transition: background-color 0.3s ease; /* Smooth transition */
    }
    .table img {
        border-radius: 8px; /* Adjusted for square shape */
        width: 50px;
        height: 50px;
        object-fit: cover;
    }
    .badge {
        font-size: 0.9em;
        padding: 5px 10px;
    }
    .badge.bg-success {
        background-color: #28a745;
    }
    .badge.bg-warning {
        background-color: #ffc107;
    }
    .badge.bg-danger {
        background-color: #dc3545;
    }

    /* Responsive table */
    @media (max-width: 768px) {
        .table {
            font-size: 0.9em;
        }
        .table th, .table td {
            padding: 10px; /* Adjust padding for smaller screens */
        }
    }
    </style>
@endsection

@section('content')
<div class="page-heading">
    <h3>Semua Pengaduan</h3>
</div>
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header text-center text-uppercase bg-primary text-white">
                    <h4 class="card-title">Daftar Pengaduan Masyarakat</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <table class="table table-striped" id="pengaduan">
                            <thead class="table-light">
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama Pengadu</th>
                                    <th>Judul Pengaduan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $value)    
                                <tr>
                                    
                                    <td><img src="{{ asset('/storage/complaints_pengguna/' . $value->image) }}" alt="{{ $value->title }}" width="100" height="150"></td>
                                    {{-- <td><img src="{{ $value->imageUpload }}" alt="{{ $value->title }}" width="100" height="100"></td> --}}
                                    <td>{{  $value->user->name ?? $value->guest_name }}</td>
                                    <td>{{ $value->title }}</td>
                                    {{-- <td><span class="badge bg-success">Selesai</span></td> --}}
                                    {{-- penggunaan cara pertama dari complaint model --}}
                                    {{-- <td>{!! $value->status_badge !!}</td> --}}
                                    {{-- penggunaan cara ke dua (menulis langsung didalam view blade) --}}
                                    <td><span class="badge"
                                    style="
                                    background-color: 
                                    @if($value->status == 'pending') #ff7976
                                    @elseif($value->status == 'selesai') #5ddab4
                                    @else #57caeb
                                    @endif">{{ strtoupper($value->status) }}</span></td>

                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Belum ada pengaduan</td>
                                    </tr>
                                @endforelse
                                {{-- <tr>
                                    <td><img src="https://via.placeholder.com/50" alt="Gambar 1"></td>
                                    <td>John Doe</td>
                                    <td>Pengaduan Kebersihan</td>
                                    <td><span class="badge bg-success">Selesai</span></td>
                                </tr>
                                <tr>
                                    <td><img src="https://via.placeholder.com/50/ff7f7f" alt="Gambar 2"></td>
                                    <td>Jane Smith</td>
                                    <td>Pengaduan Lalu Lintas</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td><img src="https://via.placeholder.com/50/7f7fff" alt="Gambar 3"></td>
                                    <td>Ali Ahmad</td>
                                    <td>Pengaduan Kerusakan Jalan</td>
                                    <td><span class="badge bg-danger">Dalam Proses</span></td>
                                </tr> --}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="{{ asset('mazer/assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
<script src="{{ asset('mazer/assets/static/js/pages/simple-datatables.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const dataTable = new simpleDatatables.DataTable("#pengaduan");
    });
</script>
@endsection