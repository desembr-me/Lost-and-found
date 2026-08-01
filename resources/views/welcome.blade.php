<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lost And Found</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="{{ asset('landingpage') }}/img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('landingpage') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('landingpage') }}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landingpage') }}/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="{{ url('/') }}" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-6 text-uppercase text-white">Lost & Found</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="{{ url('/') }}" class="nav-item nav-link">Beranda</a>
                    <a href="#about" class="nav-item nav-link">Tentang</a>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-item nav-link">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
    </div>

    <!-- Navbar End -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('landingpage') }}/img/hero.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary font-weight-medium m-1"><p class="subtitle">Sistem Pelaporan Fakultas Ilmu Komputer</p>
</h3>
                        <h1 class="display-3 text-white m-1">Barang Hilang & Ditemukan</h1>
                        <h3 class="text-white m-1">Laporkan, Temukan, dan Klaim Barang Secara Online</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('landingpage') }}/img/hero2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary font-weight-medium m-1">Sistem Pelaporan Fakultas Ilmu Komputer</h3>
                        <h1 class="display-3 text-white m-1">Barang Hilang & Ditemukan</h1>
                        <h3 class="text-white m-1">Laporkan, Temukan, dan Klaim Barang Secara Online</h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <!-- Carousel End -->
    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tentang Kami</h4>
                <h1 class="display-4">Sistem Pelaporan Barang Hilang</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Tentang Sistem</h1>
                    <h5 class="mb-3">
                        Aplikasi ini dibuat untuk membantu mahasiswa dan civitas akademika dalam menemukan barang yang
                        hilang di lingkungan fakultas ilmu komputer.
                    </h5>
                    <p>
                        Sistem ini memungkinkan pengguna untuk melaporkan barang yang hilang atau ditemukan secara
                        online. Setiap laporan akan diverifikasi oleh petugas dan pengguna lain dapat melakukan klaim
                        jika merasa barang tersebut miliknya.
                    </p>
                    <a href="{{ route('login') }}" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Mulai
                        Gunakan</a>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('landingpage') }}/img/about.png"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Manfaat Sistem</h1>
                    <p>
                        Sistem ini memberikan banyak manfaat bagi civitas kampus, antara lain kemudahan pelaporan,
                        transparansi proses klaim, dan efisiensi waktu.
                    </p>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Pelaporan barang 24 jam</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Verifikasi oleh staf fakultas</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Histori klaim dan laporan tercatat
                    </h5>
                    <a href="{{ route('register') }}" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Daftar
                        Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->
    <!-- Service Start -->
    <div class="container-fluid pt-5" id="layanan">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Layanan Kami</h4>
                <h1 class="display-4">Fitur Utama Sistem</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                            <h4><i class="fa fa-exclamation-circle service-icon"></i> Laporan Barang Hilang</h4>
                            <p class="m-0">Mahasiswa dapat melaporkan barang yang hilang melalui sistem dengan
                                mudah, kapan saja dan di mana saja.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                            <h4><i class="fa fa-box-open service-icon"></i> Laporan Barang Ditemukan</h4>
                            <p class="m-0">Pengguna dapat melaporkan barang yang ditemukan agar bisa diklaim oleh
                                pemilik yang sah.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                            <h4><i class="fa fa-history service-icon"></i> Riwayat & Status Klaim</h4>
                            <p class="m-0">Pengguna bisa melihat riwayat laporan dan klaim barang mereka secara
                                transparan dan aman.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                            <h4><i class="fa fa-user-check service-icon"></i> Verifikasi oleh Staff</h4>
                            <p class="m-0">Laporan dan klaim barang akan diverifikasi terlebih dahulu oleh staf fakultas
                             untuk menjaga keamanan data.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Offer Start -->
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-4 text-primary mt-3">Laporkan atau Temukan Barang</h1>
            <h1 class="text-white mb-3">Mari Bersama Menjaga Kejujuran di Kampus</h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3">
                Barangmu hilang? Atau menemukan barang milik orang lain?<br>
                Laporkan sekarang dan bantu pemilik yang sebenarnya!
            </h4>

            @guest
                <a href="{{ route('login') }}" class="btn btn-primary font-weight-bold px-4 py-3">
                    Login untuk Melaporkan
                </a>
            @else
                <a href="{{ route('reports.create') }}" class="btn btn-success font-weight-bold px-4 py-3">
                    Buat Laporan Baru
                </a>
            @endguest
        </div>
    </div>
    <!-- Offer End -->
    <!-- Menu Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Barang Terbaru</h4>
                <h1 class="display-4">Barang Hilang & Ditemukan</h1>
            </div>
            <div class="row">
                {{-- @forelse ($items as $item)
                    <div class="col-lg-6 mb-4">
                        <div class="row align-items-center border p-3 rounded">
                            <div class="col-4">
                                <img class="w-100 rounded" src="{{ asset('storage/' . $item->foto) }}" alt="Gambar Barang">
                            </div>
                            <div class="col-8">
                                <h4>{{ $item->nama }}</h4>
                                <p class="m-0"><strong>Lokasi:</strong> {{ $item->lokasi }}</p>
                                <p class="m-0"><strong>Status:</strong> 
                                    <span class="badge {{ $item->status == 'hilang' ? 'badge-danger' : 'badge-success' }}">
                                        {{ ucfirst($item->status) }}
                                    </span>
                                </p>
                                <a href="{{ route('items.show', $item->id) }}" class="btn btn-sm btn-primary mt-2">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">Belum ada barang yang dilaporkan.</p>
                @endforelse --}}
            </div>
        </div>
    </div>
    <!-- Menu End -->
    <!-- Reservation Start -->
    <div class="container-fluid my-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-4 text-primary">Cari Barang Hilang?</h1>
                                <h2 class="text-white">Gunakan Formulir Ini</h2>
                            </div>
                            <p class="text-white">
                                Masukkan nama barang dan lokasi terakhir. Jika barang Anda sudah dilaporkan, sistem akan
                                menampilkannya.
                            </p>
                            <ul class="list-inline text-white m-0">
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Tidak perlu login
                                    untuk mencari</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Pencarian berdasarkan
                                    nama dan lokasi</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Langsung diarahkan ke
                                    hasil</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        {{-- <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                            <h1 class="text-white mb-4 mt-5">Formulir Pencarian</h1>
                            <form action="{{ route('search.items') }}" method="GET" class="mb-5">
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control bg-transparent border-primary p-4"
                                        placeholder="Nama Barang" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lokasi" class="form-control bg-transparent border-primary p-4"
                                        placeholder="Lokasi Terakhir" />
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">
                                        Cari Sekarang
                                    </button>
                                </div>
                            </form>
                            <a href="{{ route('items.index') }}" class="btn btn-outline-light btn-sm">Lihat Semua Barang</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->
    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimoni</h4>
                <h1 class="display-4">Apa Kata Pengguna</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('landingpage') }}/img/testimonial-1.jpg"
                            alt="">
                        <div class="ml-3">
                            <h4>Sarah Putri</h4>
                            <i>Mahasiswa Teknik</i>
                        </div>
                    </div>
                    <p class="m-0">“Saya sempat kehilangan dompet di kampus, tapi berhasil ditemukan dan diklaim
                        kembali lewat sistem ini. Terima kasih!”</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('landingpage') }}/img/testimonial-2.jpg"
                            alt="">
                        <div class="ml-3">
                            <h4>Rizky Maulana</h4>
                            <i>Staff Administrasi</i>
                        </div>
                    </div>
                    <p class="m-0">“Sistem pelaporan barang hilang ini sangat membantu. Saya bisa memverifikasi
                        laporan dengan cepat dan efisien.”</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('landingpage') }}/img/testimonial-3.jpg"
                            alt="">
                        <div class="ml-3">
                            <h4>Anisa Dewi</h4>
                            <i>Mahasiswa Hukum</i>
                        </div>
                    </div>
                    <p class="m-0">“Barang saya tertinggal di taman kampus, dan dilaporkan lewat sistem ini. Senang
                        sekali bisa ketemu kembali.”</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Kontak Kami</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Jl. Informatika No.1, fikom</p>
                <p><i class="fa fa-phone-alt mr-2"></i>(021) 1234 5678</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>lostfound@fikom.ac.id</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Ikuti Kami</h4>
                <p>Ikuti akun resmi kampus untuk info barang hilang dan ditemukan.</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i
                            class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Jam Operasional</h4>
                <div>
                    <h6 class="text-white text-uppercase">Senin - Jumat</h6>
                    <p>08.00 - 17.00</p>
                    <h6 class="text-white text-uppercase">Sabtu - Minggu</h6>
                    <p>Tutup</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Saran & Masukan</h4>
                <p>Kirimkan masukan Anda agar sistem ini semakin baik.</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;"
                            placeholder="Email Anda">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5"
            style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">&copy; {{ date('Y') }} Sistem Pelaporan Barang Hilang Di Fakultas Ilmu Komputer. All
                Rights Reserved.</p>
            <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="#">Kelompok 7 PPL</a></p>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landingpage') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('landingpage') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('landingpage') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('landingpage') }}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{ asset('landingpage') }}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ asset('landingpage') }}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Contact Javascript File -->
    <script src="{{ asset('landingpage') }}/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{ asset('landingpage') }}/mail/contact.js"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('landingpage') }}/js/main.js"></script>
</body>

</html>
