<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Mbah Joglo Jepara - Spesialis Rumah Joglo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logomjheader.png" rel="icon">
    {{-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

    @include('header')

    <main class="main">

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
            {
                "loop": true,
                "speed": 1000,
                "autoplay": {
                "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
                },
                "breakpoints": {
                "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                },
                "1200": {
                    "slidesPerView": 1,
                    "spaceBetween": 1
                }
                }
            }
            </script>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/img/home/home4.png" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/home/home5.png" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/home/home2.png" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/home/home1.png" alt="Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-1">
                        <span class="section-subtitle" data-aos="fade-up">Selamat Datang</span>
                        <h1 class="mb-4" data-aos="fade-up">
                            Mbah Joglo
                        </h1>
                        <p data-aos="fade-up">
                            Kami merupakan solusi anda yang ingin memiliki Rumah Joglo tapi sulit menemukan penggerajin
                            rumah khas jawa, dan kami mewujudkan inovasi membuatkan tempat ini sebagai solusi.
                        </p>
                        <p class="mt-5" data-aos="fade-up">
                            <a href="https://wa.me/08561173501" class="btn btn-get-started">Hubungi Kami</a>
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <div class="container">
                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-3">
                        <div class="services-item" data-aos="fade-up">
                            <div class="services-icon">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <div>
                                <h3><b>Berpengalaman dalam Pengerjaan</b></h3>
                                <p>Kami ahli dalam merancang dan membangun rumah joglo dengan detail konstruksi dan
                                    finishing yang teliti dan berkualitas tinggi.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="services-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="services-icon">
                                <i class="bi bi-command"></i>
                            </div>
                            <div>
                                <h3><b>Reputasi</b></h3>
                                <p>Dikenal akan warisan seni bangunan tradisional Jawa dengan reputasi dalam memberikan
                                    kualitas terbaik dalam setiap proyek rumah joglo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="services-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="services-icon">
                                <i class="bi bi-bar-chart"></i>
                            </div>
                            <div>
                                <h3><b>Fasilitas Kerja Modern</b></h3>
                                <p>Memanfaatkan fasilitas modern dan teknologi terbaru untuk mempercepat dan
                                    meningkatkan kualitas setiap tahap konstruksi rumah joglo</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- /Services Section -->

        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p>Proyek Terakhir</p>
                <h2>Mbah Joglo</h2>
            </div><!-- End Section Title -->
            <div class="container">

                <div class="row gy-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a class="thumb d-block"><img src="assets/img/proyek/mbahjoglo.png" alt="Image"
                                    class="img-fluid rounded"></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a class="cat">Joglo Pendopo</a>
                                </div>
                                <h3><a href="https://maps.app.goo.gl/VbjiQaHee3iKjF9o9">Mbah Joglo</a>
                                    <a class="text-danger">(For Sale)</a>
                                </h3>
                                <p>
                                    Jl. Bulak Baru, Rw. III, Bugel, Kec. Kedung, Kabupaten Jepara, Jawa Tengah.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a class="thumb d-block"><img src="assets/img/proyek/lembahkoi.png" alt="Image"
                                    class="img-fluid rounded"></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a class="cat">Joglo Pendopo</a>
                                </div>
                                <h3><a href="https://maps.app.goo.gl/S4ePWoMEJzgBUWhh8">Villa Lembah Koi</a></h3>
                                <p>
                                    Jl. Pakancilan, Kuta, Kec. Megamendung, Kabupaten Bogor, Jawa Barat.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a class="thumb d-block"><img src="assets/img/proyek/balongkawok.png" alt="Image"
                                    class="img-fluid rounded"></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a class="cat">Joglo Pendopo & Mushollah</a>
                                </div>
                                <h3><a href="https://maps.app.goo.gl/vStQsZwHEHRbe1Ki8">Mbalong Kawok</a></h3>
                                <p>
                                    Sumberejo Kulon, Sumberejo Kulon, Kec. Ngunut, Kabupaten Tulungagung, Jawa Timur.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a class="thumb d-block"><img src="assets/img/proyek/horison.png" alt="Image"
                                    class="img-fluid rounded"></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a class="cat">Joglo Pendopo</a>
                                </div>
                                <h3><a href="https://maps.app.goo.gl/hRNTMM6hXppKQYDv7">Horison Rahaya Resort
                                        Banten</a></h3>
                                <p>
                                    Aweh, Kabupaten Lebak, Banten.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a class="thumb d-block"><img src="assets/img/proyek/mbahjoglo2.png" alt="Image"
                                    class="img-fluid rounded"></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a class="cat">Joglo Pendopo</a>
                                </div>
                                <h3><a href="https://maps.app.goo.gl/VbjiQaHee3iKjF9o9">Mbah Joglo</a><a
                                        class="text-danger"> (For Sale)</a></h3>
                                <p>
                                    Jl. Bulak Baru, Rw. III, Bugel, Kec. Kedung, Kabupaten Jepara, Jawa Tengah.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a class="thumb d-block"><img src="assets/img/proyek/sentulatas.png" alt="Image"
                                    class="img-fluid rounded"></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a class="cat">Joglo Gebyok</a>
                                </div>
                                <h3><a href="https://maps.app.goo.gl/ZS2DHXEBEj4yZjUt7">Sentul City</a></h3>
                                <p>
                                    Kecamatan Babagan Madang, Kanupaten Bogor, Jawa Barat
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a class="thumb d-block"><img src="assets/img/proyek/sentulbawah.png" alt="Image"
                                    class="img-fluid rounded"></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a class="cat">Joglo Gebyok</a>
                                </div>
                                <h3><a href="https://maps.app.goo.gl/ZS2DHXEBEj4yZjUt7">Sentul City</a></h3>
                                <p>
                                    Kecamatan Babagan Madang, Kanupaten Bogor, Jawa Barat
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a class="thumb d-block"><img src="assets/img/proyek/sentulgazebo.png" alt="Image"
                                    class="img-fluid rounded"></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a class="cat">Gazebo</a>
                                </div>
                                <h3><a href="https://maps.app.goo.gl/ZS2DHXEBEj4yZjUt7">Sentul City</a></h3>
                                <p>
                                    Kecamatan Babagan Madang, Kanupaten Bogor, Jawa Barat
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a class="thumb d-block"><img src="assets/img/proyek/sentulgapura.png" alt="Image"
                                    class="img-fluid rounded"></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a class="cat">Gapura</a>
                                </div>
                                <h3><a href="https://maps.app.goo.gl/ZS2DHXEBEj4yZjUt7">Sentul City</a></h3>
                                <p>
                                    Kecamatan Babagan Madang, Kanupaten Bogor, Jawa Barat
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a class="thumb d-block"><img src="assets/img/proyek/ngeleng.png" alt="Image"
                                    class="img-fluid rounded"></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a class="cat">Joglo Pendopo</a>
                                </div>
                                <h3><a href="https://maps.app.goo.gl/ioMzY1s1DurZwcqz6">Jepara</a></h3>
                                <p>
                                    Ngeling
                                    Kec. Pecangaan, Kabupaten Jepara, Jawa Tengah
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a class="thumb d-block"><img src="assets/img/proyek/pakhasan.png" alt="Image"
                                    class="img-fluid rounded"></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a class="cat">Joglo Gebyok & Joglo Pendopo</a>
                                </div>
                                <h3><a href="https://maps.app.goo.gl/LtkXYgkCdsxbtzXx6">Jepara</a></h3>
                                <p>
                                    Dusun 3,Tunggulpandean, Kec. Nalumsari, Kabupaten Jepara, Jawa Tengah
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a class="thumb d-block"><img src="assets/img/proyek/nama.png" alt="Image"
                                    class="img-fluid rounded"></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a class="cat">Joglo ?</a>
                                </div>
                                <h3><a href="https://maps.app.goo.gl/S4ePWoMEJzgBUWhh8">Lokasi</a></h3>
                                <p>
                                    alamat
                                </p>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>

        </section><!-- /Blog Posts Section -->

    </main>

    @include('footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
