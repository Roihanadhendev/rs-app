<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>RS.Tiara Fatrin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Jun 27 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header sticky-top">
        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center me-auto">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1 class="sitename">RS.Tiara Fatrin</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#jadwal">Jadwal</a></li>
                        <li><a href="#dokter">Dokter</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <a class="cta-btn d-none d-sm-block" href="{{ route('dokter.index') }}">Admin</a>

            </div>

        </div>

    </header>

    <main class="main">

        <!-- About Section -->
        <section id="home" class="about section">

            <div class="container">

                <div class="row gy-4 gx-5">

                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200"
                        style="text-align: center">
                        <img src="{{ asset('frontend/assets/img/logo-rs.jpg') }}" class="img-fluid"
                            style="width:300px">
                    </div>

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <h3>Tentang Kami</h3>
                        <p>
                            RSIA Tiara Fatrin berdiri pada tanggal 19 Agustus 1986 yang awalnya merupakan rumah sakit
                            khusus kebidanan dan penyakit kandungan dan berubah menjadi RSIA Tiara Fatrin pada tahun
                            2015. RSIA Tiara Fatrin memiliki Visi memberikan pelayanan kesehatan ibu dan anak yang
                            profesional dan bertanggung jawab. Dengan Misi memberikan pelayanan yang menjangkau seluruh
                            masyarakat, meningkatkan kualitas pelayanan melalui pengembangan SDM, mengembangkan dan
                            meningkatkan sarana prasarana rumah sakit. RSIA Tiara Fatrin merupakan suatu institusi
                            pelayanan kesehatan yang melaksanakan pelayanan medis dengan pelayanan unggulan di bidang
                            obstetri ginekologi antara lain rawat gawat darurat, rawat jalan ibu dan anak, pelayanan
                            gizi ibu hamil.
                        </p>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->


        <!-- Services Section -->
        <section id="jadwal" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Jadwal</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    @foreach ($jadwal as $item)
                        <div class="col-lg-3 col-md-5" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item  position-relative">
                                <a href="#" class="stretched-link">
                                    <h3>{{ $item->hari }}</h3>
                                </a>
                                <p>{{ $item->jam_mulai }} - {{ $item->jam_selesai }}</p>
                                <br>
                                <h5>{{ $item->dokter->nama }}</h5>
                                <p>{{ $item->dokter->spesialis }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </section><!-- /Services Section -->


        <!-- Doctors Section -->
        <section id="dokter" class="doctors section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Dokter</h2>
                <p>List Dokter</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    @foreach ($dokter as $item)
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="team-member d-flex align-items-start">
                                <div class="member-info">
                                    <h4>{{ $item->nama }}</h4>
                                    <span>{{ $item->spesialis }}</span>
                                </div>
                            </div>
                        </div><!-- End Team Member -->
                    @endforeach
                </div>

            </div>

        </section><!-- /Doctors Section -->


        <!-- Contact Section -->
        <section id="kontak" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
            </div><!-- End Section Title -->


            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Location</h3>
                                <p>Jl. Rajawali, No. 495-496, 9 Ilir, Ilir Tim. Ii, Kota Palembang, Sumatera Selatan</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Telpon</h3>
                                <p>0711353438 / 082376763215</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p>rs.Tiarafatrin@gmail.com</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer light-background">
        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">RS.Tiara Fatrin</strong>
            </p>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    {{-- <div id="preloader"></div> --}}

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
