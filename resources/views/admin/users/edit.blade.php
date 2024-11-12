@extends('layouts.base-app')

@section('title', 'Users Dashboard')

@section('content')
<div class="container mt-5">
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="card-title">Form Edit Data User</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="{{ route('admin.users.update', $user->id) }}" method="POST">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama Lengkap</label>
                                            <input type="text" value="{{ $user->name }}" id="" class="form-control" placeholder="Nama Lengkap"
                                                name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="country-floating">Email</label>
                                            <input type="email" value="{{ $user->email }}" id="" class="form-control" name="email" placeholder="Email"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="last-name-column">Nomor Telepon</label>
                                            <input type="number" value="{{ $user->telp }}" id="" class="form-control" placeholder="Nomor Telepon"
                                                name="telp" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="city-column">Password</label>
                                            <input type="password" id="" class="form-control" placeholder="Masukkan Password"
                                                name="password">
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
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