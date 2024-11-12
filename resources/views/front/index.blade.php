@extends('layouts.base-front')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand ms-4" href="index.html">
            <img src="{{ asset('images/adu.png') }}" class="img-fluid logo-pengaduan" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#form-pengaduan">Form Pengaduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#list-pengaduan">List Pengaduan</a>
                </li>
            </ul>
        </div>
        <div class="d-flex">
            <a class="btn btn-outline-primary" href="login.html">Login</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <section id="dashboard">
        <div class="row">
            <!-- Card for Pending Complaints -->
            <div class="col-md-4 mb-3">
                <div class="card text-white bg-warning">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pengaduan Pending</h5>
                        <h2 class="card-text">10</h2> <!-- Ganti dengan jumlah dinamis -->
                    </div>
                </div>
            </div>
            <!-- Card for In-Process Complaints -->
            <div class="col-md-4 mb-3">
                <div class="card text-white bg-info">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pengaduan Proses</h5>
                        <h2 class="card-text">5</h2> <!-- Ganti dengan jumlah dinamis -->
                    </div>
                </div>
            </div>
            <!-- Card for Completed Complaints -->
            <div class="col-md-4 mb-3">
                <div class="card text-white bg-success">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pengaduan Selesai</h5>
                        <h2 class="card-text">20</h2> <!-- Ganti dengan jumlah dinamis -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header text-center text-uppercase bg-primary text-white">
                        <h4 class="card-title">Form Pengaduan Masyarakat</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama Lengkap</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="Nama Lengkap" name="fname-column" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="country-floating">Judul Pengaduan</label>
                                            <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Judul Pengaduan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="last-name-column">Nomor Telepon</label>
                                            <input type="text" id="last-name-column" class="form-control" placeholder="Nomor Telepon" name="lname-column" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="company-column">Gambar</label>
                                            <input type="file" id="company-column" class="form-control" name="company-column" placeholder="Image" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="city-column">Alamat Email</label>
                                            <input type="email" id="city-column" class="form-control" placeholder="Alamat Email" name="city-column" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="email-id-column">Deskripsi</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection