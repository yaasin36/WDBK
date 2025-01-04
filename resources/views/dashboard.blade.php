@extends('templates.auth')
@section('title', 'Sistem Temu Janji')
@section('content')

    <!-- Header and Hero Section -->
    <header class="bg-dark text-white py-3 px-4 fixed-top">
        <h5 class="mb-0">Poliklinik</h5>
    </header>

    <!-- Hero Section -->
    <section class="position-relative" 
        style="background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20210730/pngtree-doctor-background-writing-medical-advice-on-folder-medical-record-image_754578.jpg');
               background-size: cover; 
               background-position: center; 
               height: 60vh;">
        <!-- Overlay -->
        <div class="position-absolute w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6);"></div>
        <!-- Hero Content -->
        <div class="container position-relative text-center text-white d-flex flex-column justify-content-center align-items-center h-100">
            <h1 class="display-4 fw-bold">Sistem Temu Janji Pasien - Dokter</h1>
            <p class="lead mt-3" style="color: rgba(255, 255, 255, 0.8);">
                <b>Bimbingan Karir 2024 Bidang Web</b>
            </p>
        </div>
    </section>

    <!-- Card Section -->
    <!-- Card Section -->
<section class="container my-5">
    <div class="row justify-content-center g-4">
        <!-- Card 1: Login Sebagai Admin -->
        <div class="col-sm-6 col-md-4">
            <div class="card shadow-lg border-0 h-100">
                <div class="card-body text-center">
                    <div class="icon bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-user-cog fa-2x"></i>

                    </div>
                    <h5 class="fw-bold">Login Sebagai Admin</h5>
                    <p class="text-muted mt-3">Apabila Anda adalah seorang Admin, silakan Login untuk mengelola dan memantau sistem aplikasi ini!</p>
                </div>
                <a href="{{ url('/admin/login') }}" class="btn btn-primary btn-lg px-4 py-2 mt-3">Masuk Sekarang</a>
            </div>
        </div>

        <!-- Card 2: Registrasi Sebagai Pasien -->
        <div class="col-sm-6 col-md-4">
            <div class="card shadow-lg border-0 h-100">
                <div class="card-body text-center">
                    <div class="icon bg-success text-white rounded-circle mx-auto mb-4"
                        style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-user fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Registrasi Sebagai Pasien</h5>
                    <p class="text-muted mt-3">Apabila Anda adalah seorang Pasien, silakan Registrasi terlebih dahulu untuk melakukan pendaftaran sebagai Pasien!</p>
                </div>
                <a href="{{ url('/pasien/register') }}" class="btn btn-success btn-lg px-4 py-2 mt-3">Daftar Sekarang</a>
            </div>
        </div>

        <!-- Card 3: Login Sebagai Dokter -->
        <div class="col-sm-6 col-md-4">
            <div class="card shadow-lg border-0 h-100">
                <div class="card-body text-center">
                    <div class="icon bg-danger text-white rounded-circle mx-auto mb-4"
                        style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-user-md fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Login Sebagai Dokter</h5>
                    <p class="text-muted mt-3">Apabila Anda adalah seorang Dokter, silakan Login terlebih dahulu untuk memulai melayani Pasien!</p>
                </div>
                <a href="{{ url('/dokter/login') }}" class="btn btn-danger btn-lg px-4 py-2 mt-3">Masuk Sekarang</a>
            </div>
        </div>
    </div>
</section>


    <!-- Statistik Section -->
    

    

    <!-- Footer Section -->
    <footer class="bg-dark text-white py-4 text-center">
        <p class="mb-0">&copy; <b>2024 Poliklinik - Sistem Temu Janji</b></p>
    </footer>

@endsection
