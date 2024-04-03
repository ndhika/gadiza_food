@extends('layouts.login')

@section('content')
    <main>
        <div class="main w-50 bg-white position-absolute top-50 start-50 translate-middle rounded h-auto my-auto p-2 px-3 text-black">
            <center><img src="assets/img/logo.png" class="img-fluid " alt="logo" style="width: 90px;"></center>
            <p class="text-center mt-1 fs-4">Buat Akun</p>
            <form>
            <div class="mb-2 mt-2 mx-3">
                <label for="nama_lengkap" class="form-label fs-6 mb-1">Nama Lengkap</label>
                <input type="text" class="form-control border border-black mx-auto" id="nama_lengkap" placeholder="nama">
            </div>
            <div class="mb-2 mt-2 mx-3">
                <label for="username" class="form-label fs-6 mb-1">Username</label>
                <input type="text" class="form-control mx-auto border border-black" id="username" placeholder="Username">
            </div>
            <div class="mb-2 mt-2 mx-3">
                <label for="no_telepon" class="form-label fs-6 mb-1">No. Telepon</label>
                <input type="text" class="form-control mx-auto border border-black" id="no_telepon" placeholder="No. Telepon" inputmode="numeric">
            </div>
            <div class="mb-2 mt-2 mx-3">
                <label for="email" class="form-label fs-6 mb-1">Email</label>
                <input type="text" class="form-control mx-auto border border-black" id="email" placeholder="Email">
            </div>
            <div class="mb-2 mt-2 mx-3">
                <label for="buat_password" class="form-label fs-6 mb-1">Buat Password</label>
                <div class="input-group">
                    <input type="password" class="form-control border border-black border-end-0" id="buat_password" placeholder="Buat Password (min. 8 huruf)">
                    <button class="btn border-top border border-black border-bottom border-end border-start-0" type="button" id="togglePassword">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                </div>
            </div>
            <div class="mb-3 mt-2 mx-3">
                <label for="alamat_lengkap" class="form-label fs-6 mb-1">Alamat Lengkap</label>
                <input type="text" class="form-control mx-auto border border-black" id="alamat_lengkap" placeholder="Alamat Lengkap">
            </div>
            <div class="tombol d-grid col-11 mx-auto">
                <button type="submit" class="btn mt-2">Daftar</button>
            </div>
            </form>
            <div class="text-center mt-3">
                <p>Sudah punya akun? <a href="/login">Login</a></p>
            </div>
        </div>
    </main>
    
    <script src="{{ asset('assets/js/register.js') }}"></script> 
@endsection