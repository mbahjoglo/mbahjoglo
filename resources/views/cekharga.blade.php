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

        <section id="about-2" class="about-2 section">

            <div class="container">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
                            <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">

                                <span class="content-subtitle">PEMBERITAHUAN</span>
                                <h2 class="content-title text-start text-center">
                                    Spesifikasi Berdasarkan Kelas
                                </h2>
                                <h3 class="lead text-start fw-bold">
                                    1. Kelas A
                                </h3>
                                <p class="mb-5 text-start text-break text-justify">
                                    Kelas A adalah pilihan terbaik untuk Anda yang menginginkan kualitas istimewa.
                                    Menggunakan kayu jati dengan kualitas premium, kelas ini menawarkan keindahan dan
                                    kekuatan yang tiada tandingan. Ukiran-ukiran pada kelas A dikerjakan dengan sangat
                                    teliti dan detail, menampilkan seni ukir yang luar biasa. Diameter tiang pada kelas
                                    A adalah (Min. 30 Centimeter - Max. 40 Centimeter).
                                </p>
                                <h3 class="lead text-start fw-bold">
                                    2. Kelas B
                                </h3>
                                <p class="mb-5 text-start text-break text-justify">
                                    Kelas B adalah pilihan yang menawarkan keseimbangan antara kualitas dan harga. Kayu
                                    jati yang digunakan masih berkualitas baik, dan ukiran-ukiran yang dihasilkan tetap
                                    menawan meskipun tidak seistimewa kelas A. Kelas ini cocok untuk Anda yang
                                    menginginkan produk kayu jati yang kuat dan indah dengan harga yang lebih
                                    terjangkau. Diameter tiang pada kelas B adalah (Min. 25 Centimeter - Max. 30
                                    Centimeter).
                                </p>
                                <h3 class="lead text-start fw-bold">
                                    3. Kelas C
                                </h3>
                                <p class="mb-5 text-start text-break text-justify">
                                    Kelas C adalah pilihan ekonomis tanpa mengorbankan keaslian kayu jati. Kayu jati
                                    yang digunakan pada kelas ini memiliki kualitas standar, dan ukiran yang diterapkan
                                    lebih sedikit dan sederhana. Kelas C cocok untuk Anda yang mencari produk kayu jati
                                    yang fungsional dengan harga yang lebih bersahabat. Diameter tiang pada kelas C
                                    adalah (Min. 18 Centimeter - Max. 25 Centimeter).
                                </p>

                                <p class="mt-5 mb-5 text-start text-break fst-italic text-justify">
                                    <b>Catatan Penting</b> : Harga yang tertera tidak termasuk biaya kirim,
                                    pemasangan, serta tambahan-tambahan lainnya seperti (gebyok dan aksesoris tambahan).
                                    Silakan hubungi kami untuk informasi lebih lanjut dan penawaran khusus yang sesuai
                                    dengan kebutuhan Anda.
                            </div>
                        </div>

                        <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
                            <div class="px-3">
                                <span class="content-subtitle">Kalkulator</span>
                                <h2 class="content-title text-start">
                                    Ukuran & Harga (Joglo Pendopo, Joglo Gebyok, Gazebo, Gapura, Mushollah).
                                </h2>

                                <div class="container mt-5">
                                    <form action="/cekharga" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="panjang">Panjang (meter):</label>
                                            <input type="number" name="panjang" id="panjang" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="lebar">Lebar (meter):</label>
                                            <input type="number" name="lebar" id="lebar" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="kategori">Kategori:</label>
                                            <select name="kategori" id="kategori" class="form-control" required>
                                                <option value="A">Kelas A</option>
                                                <option value="B">Kelas B</option>
                                                <option value="C">Kelas C</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn-get-started mt-3">Hitung</button>
                                    </form>

                                    @if (isset($total_harga))
                                        <div class="mt-5">
                                            <h2 class="content-title text-start">Hasil Perhitungan:</h2>
                                            <p><strong>Panjang:</strong> {{ $panjang }} meter</p>
                                            <p><strong>Lebar:</strong> {{ $lebar }} meter</p>
                                            <p><strong>Kategori:</strong> Kelas {{ $kategori }}</p>
                                            <p><strong>Total Harga:</strong> Rp.
                                                {{ number_format($total_harga, 0, ',', '.') }}</p>
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About 2 Section -->

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
