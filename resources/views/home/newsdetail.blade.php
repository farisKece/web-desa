<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Desa Warungdowo - Berita</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet') }}">

    <!-- Load Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medicio - v4.9.1
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a href="{{ url('/') }}" class="logo me-0"><img src="assets/img/logo_kiri.png" alt=""></a>
            <a href="{{ url('/') }}" class="logo me-auto"><img src="assets/img/logo_kanan.png" alt=""></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="/">HOME</a></li>
                    <li class="dropdown"><a href="/profil"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link" href="/sejarah">Sejarah Desa</a></li>
                            <li><a class="nav-link" href="/visimisi">Visi dan Misi</a></li>
                            <li><a class="nav-link" href="/sotk">Struktur Organisasi dan Tata Kerja</a></li>
                            <li><a class="nav-link" href="/geografis">Kelembagaan</a></li>
                            <li><a class="nav-link" href="/potensi">Potensi Desa</a></li>
                            <li><a class="nav-link" href="/asetdesa">Aset Desa</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="/datadesa">Data Desa</a></li>
                    <li class="dropdown"><a href="/informasi"><span>INFORMASI LAYANAN</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/ktp">Pembuatan KTP</a></li>
                            <li><a href="/kk">Pembuatan KK</a></li>
                            <li><a href="/aktekelahiran">Pembuatan Akte Kelahiran</a></li>
                            <li><a href="/aktekematian">Pembuatan Akte Kematian</a></li>
                            <li><a href="/pindahdomisili">Prosedur Pindah Domisili</a></li>
                            <li><a href="/izinkeramaian">Pembuatan Surat Izin Keramaian</a></li>
                            <li><a href="http://bphtb.probolinggokab.go.id/" target="_blank">Cek PBB</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="/event">EVENT</a></li>
                    <li><a class="nav-link scrollto" href="/berita">BERITA</a></li>
                    <li><a class="nav-link scrollto" href="/galeri">GALERI</a></li>
                    <li><a class="nav-link scrollto" href="/umkm">POJOK UMKM</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section>
    </section><!-- End Hero -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Berita Terbaru Desa Warungdowo</h2>
            </div>

            {{-- <div class="row">
                <div class="col-md-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="/image/{{ $news->image }}" alt="" class="img-fluid">
                        </div>
                        <br>
                        <div class="text-center">
                            <h4>{{ $news->title }}</h4>
                        </div>
                        <p class="description">{{ $news->description }}</p>
                        <div class="d-flex justify-content-end mt-3">
                            <a href="/detailnews/{{ $news->id }}"
                                class="btn btn-primary btn-right">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="width: 100%;">
                        <div class="member-img">
                            <img src="/image/{{ $news->image }}" alt="" class="img-fluid" style="width: 100%; height: auto;">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="width: 100%;">
                        <div class="text-center">
                            <h4>{{ $news->title }}</h4>
                        </div>
                        <p class="description" style="width: 100%;">{!! $news->description !!}</p>
                        <div class="text-center mt-3">
                            <small>Diposting: {{ $news->created_at->format('d M Y') }}</small>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="width: 100%;">
                        <div class="section-title">
                            <h2>Berita Terkini</h2>
                        </div>
                        @foreach ($news as $newsbaru)
                        <div class="member-img">
                            <img src="/image/{{ $newsbaru->image }}" alt="" class="img-fluid" style="max-width: 100%; height: auto;">
                        </div>
                        <br>
                        <div class="text-center">
                            <h4>{{ $newsbaru->title }}</h4>
                        </div>
                        <p class="description" style="width: 100%;">{{ $newsbaru->description }}</p>
                        <div class="d-flex justify-content-end mt-3">
                            <a href="/detailnews/{{ $newsbaru->id }}" class="btn btn-primary btn-right">Selengkapnya</a>
                        </div>
                        <hr>
                        @endforeach
                    </div>
                </div>
            </div> --}}

        </div>
    </section><!-- End Featured Services Section -->

    <main>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Desa Warungdowo</h3>
                            <p>
                                Kec. Leces <br>
                                Kab. Probolinggo<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> Dwarungdowo@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="https://www.instagram.com/warungdowotv/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a> 
                                <a href="#" class="google-plus"><i class="bx bxl-tiktok"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/beranda">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/profil">Profil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/informasi">Informasi Layanan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/berita">Berita</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/galeri">Galeri</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Layanan Desa</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/kk">Pembuatan KTP</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/ktp">Pembuatan Kartu Keluarga</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/aktekelahiran">Pembuatan Akte
                                    Kelahiran</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/aktekematian">Pembuatan Akte
                                    Kematian</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/pindahdomisili">Prosedur Pindah
                                    Domisili</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/izinkeramaian">Pembuatan Surat Izin
                                    Keramaian</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Human</span></strong>.
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
