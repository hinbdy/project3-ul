<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Blog - Home</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Ubuntu', sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Ubuntu', sans-serif;
    }

    p {
      font-family: 'Ubuntu', sans-serif;
      font-weight: 300;
      /* Font weight light */
    }
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top shadow">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>My Blog</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="<?= base_url() ?>">Home</a></li>
          <li><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
          <li><a class="nav-link" href="<?= base_url('post') ?>">Blog</a></li>
          <li><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
          <li><a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a></li>
        </ul>
      </nav><!-- .navbar -->


      <div class="position-relative">
        <a href="https://x.com/xndefxned" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="https://www.instagram.com/_hi.ul/#" class="mx-2"><span class="bi-instagram"></span></a>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </div>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container py-5">
        <h1 class="display-5 fw-bold">Selamat Datang</h1>
        <!-- <p class="col-md-8 fs-4">di laman portal berita</p> -->
        <!-- <button class="btn btn-primary btn-sm" type="button">Read more</button> -->
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 my-2 card">
          <div class="card-body">
            <h5 class="h5">Mulai ngoding PHP nich</h5>
            <p>PHP (Hypertext Preprocessor) adalah bahasa pemrograman server-side yang dirancang khusus untuk
              pengembangan web. Dengan sintaks yang mirip dengan C dan Perl, PHP memudahkan pembuatan halaman web
              dinamis dan aplikasi berbasis server. Bahasa ini terintegrasi dengan berbagai sistem manajemen basis data
              seperti MySQL dan PostgreSQL, serta mendukung berbagai protokol dan format, seperti JSON dan XML. PHP
              dikenal karena kemampuannya untuk menangani formulir, sesi, dan cookie dengan mudah. Keunggulannya
              termasuk open-source dan komunitas yang aktif, serta dokumentasi yang lengkap. PHP juga dapat digunakan
              bersama dengan HTML dan CSS untuk menghasilkan aplikasi web yang interaktif dan responsif.</p>
          </div>
        </div>
        <div class="col-md-12 my-2 card">
          <div class="card-body">
            <h5 class="h5">Jadi paham CSS dan JS</h5>
            <p>CSS (Cascading Style Sheets) dan JavaScript (JS) adalah dua teknologi penting dalam pengembangan web. CSS
              digunakan untuk mengatur tampilan dan layout halaman web, seperti warna, font, dan jarak antar elemen.
              Dengan CSS, pengembang dapat menciptakan desain yang konsisten dan responsif di berbagai perangkat.
              JavaScript, di sisi lain, adalah bahasa pemrograman yang memungkinkan pengembangan fitur interaktif dan
              dinamis di halaman web, seperti animasi, validasi formulir, dan interaksi pengguna. Keduanya sering
              digunakan bersamaan: CSS untuk styling dan JS untuk fungsionalitas. Kombinasi ini memungkinkan pembuatan
              pengalaman web yang menarik dan user-friendly.</p>
          </div>
        </div>
        <div class="col-md-12 my-2 card">
          <div class="card-body">
            <h5 class="h5">Codeigniter asyik juga kok</h5>
            <p>CodeIgniter adalah framework PHP yang dirancang untuk mempermudah pengembangan aplikasi web dengan
              pendekatan Model-View-Controller (MVC). Framework ini terkenal karena performa yang cepat dan footprint
              yang ringan, yang membuatnya ideal untuk pengembangan aplikasi yang memerlukan kecepatan dan efisiensi.
              CodeIgniter menyediakan berbagai fitur bawaan seperti routing, library, dan helper, yang mempercepat
              proses pengembangan. Dengan dokumentasi yang komprehensif dan komunitas pengguna yang aktif, CodeIgniter
              menawarkan solusi yang mudah digunakan dan fleksibel untuk membangun aplikasi web dinamis. Kemampuannya
              untuk diintegrasikan dengan berbagai jenis database dan sistem membuatnya menjadi pilihan populer di
              kalangan pengembang web.</p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <div class="container py-4">
    <footer class="pt-3 mt-4 text-muted border-top">
      <div class="container">
        &copy; xlfxhdyntx <?= Date('Y') ?>
      </div>
    </footer>
  </div>
  <!-- Jquery dan Bootsrap JS -->
  <script src="<?= base_url('js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>