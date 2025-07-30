<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyBlog</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
  <!-- Optional: Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <style>
    body {
      background-color: #f8f9fa;
    }

    .navbar {
  background-color: #6c757d; /* Bootstrap "secondary" gray */
	}

    .navbar-brand,
    .nav-link {
      color: #fff !important;
    }

    .nav-link.active {
      font-weight: bold;
    }

    .hero-section {
      background: linear-gradient(to right, #007bff, #00c6ff);
      color: white;
    }

    .card-title {
      color: #0056b3;
    }

    .card:hover {
      transform: translateY(-5px);
      transition: 0.3s;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004999;
    }

    footer {
      font-size: 0.9rem;
      color: #6c757d;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('post') ?>">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a></li>
      </ul>
      <form class="d-flex ms-auto" action="<?= base_url('search') ?>" method="get">
        <input class="form-control me-2" type="search" name="keyword" placeholder="Cari..." required>
        <button class="btn btn-outline-light" type="submit">Cari</button>
      </form>
    </div>
  </div>
</nav>

  <!-- Hero Section -->
  <section class="hero-section text-center py-5 mt-5">
    <div class="container py-4">
      <h1 class="display-5 fw-bold">Selamat Datang di Wartapala Indonesia</h1>
      <p class="fs-5">Ruang berbagi informasi, kisah petualangan, dan kepedulian lingkungan bagi para pecinta alam
        Indonesia.</p>
    </div>
  </section>

  <!-- Kartu Berita -->
  <div class="container py-5">
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Mahapeka UIN Bandung Kirim 15 Anggota Muda ke Wilayah Baduy, ini Tujuannya</h5>
            <p class="card-text">15 anggota muda Mahapeka mengikuti upacara pelepasan Baksos dan PLH ke-35 pada Selasa,
              29 Juli 2025.</p>
            <a href="<?= base_url('post/codeigniter-starter') ?>" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Renjana Buana Gelar Aksi Penanaman Pohon Peringati Dies Natalis ke-10 Unusia</h5>
            <p class="card-text">MPA Renjana Buana menyelenggarakan aksi penanaman pohon sebagai wujud cinta lingkungan.
              Kegiatan ini berlangsung di Bogor.</p>
            <a href="<?= base_url('post/hello-world') ?>" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Sispala Natha Mandala Jepara Tuntaskan Ekspedisi ke Gunung Muria</h5>
            <p class="card-text">Ekstrakurikuler Sispala Natha Mandala Jepara ekspedisi ke puncak Songo Likur Gunung
              Muria via Desa Tempur, Jepara.</p>
            <a href="<?= base_url('post/meetup-comunity') ?>" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="container py-4">
    <footer class="pt-3 mt-4 text-muted border-top text-center">
      &copy; <?= date('Y') ?> Wartapala Indonesia
    </footer>
  </div>

  <!-- JS -->
  <script src="<?= base_url('js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>
