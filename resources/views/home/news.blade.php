<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halaman Informasi - Stuncare</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/Tag.png') }}" rel="icon">
  <link href="{{ asset('assets/img/Tag.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="/home" class="logo d-flex align-items-center">
      <img src="assets/img/logo.png" alt="">
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="/home">Home</a></li>
        <li><a class="nav-link scrollto active" href="/news">Informasi</a></li>
        <li><a class="nav-link scrollto" href="{{ route('logout') }}">Logout</a></li>
      <i class="mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->

  <main id="main" class="mt-5">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h2>"{{ $fundamental->judul }}"</h2>
              <p>Mari mengenal stunting  lebih dalam</p>
              <div class="text-center text-lg-start">
                  <a href="{{ route('news.detail', $fundamental->slug) }}" class="readmore stretched-link mt-auto">
                 <span>Selengkapnya</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200" style="padding-top: 20px;">
            <img src="{{ $fundamental->gambar }}" class="img-fluid" alt="">
        </div>
       
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Informasi Lain Terkait Stunting</p>
        </header>

        <div class="row">
          @forelse ($news as $item)
            <div class="col-lg-4">
              <div class="post-box">
                <div class="post-img"><img src="{{ asset($item->gambar) }}" class="img-fluid" alt=""></div>
                <span class="post-date">{{ date('d F Y', strtotime($item->tanggal)) }}</span>
                <h3 class="post-title">{{ $item->judul }}</h3>
                <a href="{{ route('news.detail', $item->slug) }}" class="readmore stretched-link mt-auto"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          @empty
            <div class="col-lg-12">
              <div class="post-box">
                <h3 class="post-title text-center">Tidak ada data</h3>
              </div>
            </div>
          @endforelse
        </div>
      </div>

    </section><!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; 2023; Copyright <strong><span>StunCare</span></strong>
      </div>
      <div class="credits">
        <img src="assets/img/fb.png" alt=""style="width: 30px; height: 30px;">
        <img src="assets/img/yt.png" alt="" style="width: 50px; height: 50px;">
        <img src="assets/img/ig.png" alt=""style="width: 30px; height: 30px;">
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>