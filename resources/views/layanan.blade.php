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

        <!-- Tabs Section -->
        <section id="tabs" class="tabs section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Melayani Berbagai Jenis</h2>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gap-x-lg-4 justify-content-between">
                    <div class="col-lg-4 js-custom-dots">

                        <a href="#" class="service-item link horizontal d-flex active" data-aos="fade-left"
                            data-aos-delay="0">
                            <div class="service-icon color-1 mb-4">
                                <i class="bi bi-1-square"></i>
                            </div>
                            <!-- /.icon -->
                            <div class="service-contents">
                                <h3>Joglo Pendopo</h3>
                                <p>
                                    Joglo Pendopo adalah bangunan tradisional Jawa yang berfungsi sebagai pusat kegiatan
                                    sosial dan budaya.
                                </p>
                            </div>
                            <!-- /.service-contents-->
                        </a>

                        <a href="#" class="service-item link horizontal d-flex active" data-aos="fade-left"
                            data-aos-delay="0">
                            <div class="service-icon color-1 mb-4">
                                <i class="bi bi-2-square"></i>
                            </div>
                            <!-- /.icon -->
                            <div class="service-contents">
                                <h3>Joglo Gebyok</h3>
                                <p>
                                    Joglo Gebyok adalah rumah tradisional Jawa yang dihiasi dengan ukiran kayu rumit dan
                                    artistik.
                                </p>
                            </div>
                            <!-- /.service-contents-->
                        </a>

                        <a href="#" class="service-item link horizontal d-flex active" data-aos="fade-left"
                            data-aos-delay="0">
                            <div class="service-icon color-1 mb-4">
                                <i class="bi bi-3-square"></i>
                            </div>
                            <!-- /.icon -->
                            <div class="service-contents">
                                <h3>Joglo Gazebo</h3>
                                <p>
                                    Joglo Gazebo adalah struktur tradisional Jawa yang sering digunakan sebagai tempat
                                    istirahat atau pertemuan ringan.
                                </p>
                            </div>
                            <!-- /.service-contents-->
                        </a>

                        <a href="#" class="service-item link horizontal d-flex active" data-aos="fade-left"
                            data-aos-delay="0">
                            <div class="service-icon color-1 mb-4">
                                <i class="bi bi-4-square"></i>
                            </div>
                            <!-- /.icon -->
                            <div class="service-contents">
                                <h3>Joglo Gapura</h3>
                                <p>
                                    Joglo Gapura adalah gerbang tradisional Jawa yang megah, sering digunakan sebagai
                                    pintu masuk ke kompleks bangunan atau perkampungan.
                                </p>
                            </div>
                            <!-- /.service-contents-->
                        </a>

                        <a href="#" class="service-item link horizontal d-flex active" data-aos="fade-left"
                            data-aos-delay="0">
                            <div class="service-icon color-1 mb-4">
                                <i class="bi bi-5-square"></i>
                            </div>
                            <!-- /.icon -->
                            <div class="service-contents">
                                <h3>Joglo Mushollah</h3>
                                <p>
                                    Joglo Mushollah adalah bangunan kecil berarsitektur tradisional Jawa yang digunakan
                                    sebagai tempat ibadah Muslim.
                                </p>
                            </div>
                            <!-- /.service-contents-->
                        </a>

                    </div>

                    <div class="col-lg-8">
                        <div class="swiper init-swiper-tabs">
                            <script type="application/json" class="swiper-config">
            {
                "loop": true,
                "speed": 600,
                "autoHeight": true,
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
                                    <img src="assets/img/proyek/mbahjoglo.png" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/proyek/ngeleng.png" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/proyek/sentulgazebo.png" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/proyek/sentulgapura.png" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/proyek/mushollah.png" alt="Image" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Tabs Section -->

        {{-- <!-- Pricing Section -->
        <section id="pricing" class="pricing section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p>Plans</p>
                <h2>Pricing Table</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing-item">
                            <h3>Free</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-item recommended">
                            <span class="recommended-badge">Recommended</span>
                            <h3>Business</h3>
                            <h4><sup>$</sup>19<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="pricing-item">
                            <h3>Developer</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>

        </section><!-- /Pricing Section --> --}}

        <!-- Faq Section -->
        <section id="faq" class="faq section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Cara Pemesanan</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-12">
                        <div class="custom-accordion" id="accordion-faq">

                            <div class="accordion-item">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-faq-1">
                                        Pemesanan secara Offline atau Datang ke Tempat
                                    </button>
                                </h2>

                                <div id="collapse-faq-1" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion-faq">
                                    <div class="accordion-body">
                                        <p>1. <b>Kunjungi Kelokasi Mbah Joglo: </b>Alamat Mbah Joglo berada di Jl. Bulak
                                            Baru, Rw. III, Bugel, Kec. Kedung, Kabupaten Jepara, Jawa Tengah, Indonesia
                                        </p>
                                        <br>
                                        <p>2. <b>Pilih Model dan Desain: </b>Berbagai model dan desain rumah joglo yang
                                            tersedia. Diskusikan dengan kami untuk menyesuaikan dengan kebutuhan dan
                                            budget Anda.
                                        </p>
                                        <br>
                                        <p>3. <b>Konsultasi dan Perencanaan: </b>Diskusikan detail spesifikasi seperti
                                            bahan baku, ukuran, dan tambahan lainnya seperti ukiran atau dekorasi
                                            khusus.
                                        </p>
                                        <br>
                                        <p>4. <b>Tawar-Menawar dan Kesepakatan: </b>Tentukan harga yang disepakati dan
                                            syarat pembayaran. Pastikan untuk menanyakan biaya tambahan seperti biaya
                                            pengiriman atau pemasangan.
                                        </p>
                                        <br>
                                        <p>5. <b>Pembayaran: </b>Lakukan pembayaran sesuai dengan kesepakatan.
                                        </p>
                                        <br>
                                        <p>5. <b>Pengerjaan: </b>Pengerjaan sesuai pesanan yang telah dilakukan
                                            sebelumnya oleh pembeli.
                                        </p>
                                        <br>
                                        <p>5. <b>Pengiriman dan Pemasangan: </b>Jika pengerjaan sudah selesai nanti akan
                                            dikonfirmasi lalu atur jadwal pengiriman dan pemasangan
                                            dengan penjual. Pastikan untuk mengawasi proses pengirimanan pemasangan agar
                                            berjalan lancar sesuai dengan perjanjian.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- .accordion-item -->

                            <div class="accordion-item">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-faq-2">
                                        Pemesanan secara Online
                                    </button>
                                </h2>

                                <div id="collapse-faq-2" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion-faq">
                                    <div class="accordion-body">
                                        <p>1. <b>Hubungi Mbah Joglo: </b>Untuk Platform yang bisa dihubungi terdapat di
                                            bagian halaman kotak yang telah disedikan.
                                        </p>
                                        <br>
                                        <p>2. <b>Konsultasi dan Diskusi: </b>Hubungi melalui kontak yang
                                            tersedia (telepon, WhatsApp, atau pesan langsung di platform) untuk
                                            konsultasi
                                            tentang desain, ukuran, material, dan harga rumah joglo.
                                        </p>
                                        <br>
                                        <p>3. <b>Pembicaraan Detail: </b>Diskusikan secara detail spesifikasi yang
                                            diinginkan, seperti jenis kayu, ukuran, dan tambahan lainnya seperti ukiran,
                                            atau dekorasi interior.
                                        </p>
                                        <br>
                                        <p>4. <b>Negosiasi dan Kesepakatan: </b>Tentukan harga, syarat pembayaran, dan
                                            jadwal pengiriman. Pastikan untuk menegosiasikan dengan jelas biaya tambahan
                                            seperti biaya pengiriman atau pemasangan.
                                        </p>
                                        <br>
                                        <p>5. <b>Pembayaran: </b>Lakukan pembayaran sesuai dengan kesepakatan yang telah
                                            dibuat. Pastikan untuk mendapatkan bukti pembayaran dan konfirmasi dari
                                            kami.
                                        </p>
                                        <br>
                                        <p>6. <b>Pengerjaan: </b>Pengerjaan sesuai pesanan yang telah dilakukan
                                            sebelumnya oleh pembeli.
                                        </p>
                                        <br>
                                        <p>7. <b>Pengiriman dan Pemasangan: </b>Jika pengerjaan sudah selesai nanti akan
                                            dikonfirmasi lalu atur jadwal pengiriman dan pemasangan
                                            dengan penjual. Pastikan untuk mengawasi proses pengirimanan pemasangan agar
                                            berjalan lancar sesuai dengan perjanjian.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- .accordion-item -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Faq Section -->

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
