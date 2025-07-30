<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyBlog</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('about') ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
					</li>
				</ul>
				<form class="d-flex ms-auto" action="<?= base_url('search') ?>" method="get">
					<input class="form-control me-2" type="search" name="keyword" placeholder="Cari..." aria-label="Search" required>
					<button class="btn btn-outline-light" type="submit">Cari</button>
				</form>
			</div>
		</div>
	</nav>

	<!-- Hero -->
	<section class="text-center py-5 mt-5 bg-light">
		<div class="container">
			<h1 class="display-5 fw-bold">Selamat Datang di Wartapala Indonesia</h1>
			<p class="fs-5">Ruang berbagi informasi, kisah petualangan, dan kepedulian lingkungan bagi para pecinta alam Indonesia.

</p>
		</div>
	</section>

	<!-- Kartu Berita -->
	<div class="container py-5">
		<div class="row g-4">
			<div class="col-md-6 col-lg-4">
				<div class="card h-100 shadow-sm">
					<div class="card-body">
						<h5 class="card-title">Mahapeka UIN Bandung Kirim 15 Anggota Muda ke Wilayah Baduy, ini Tujuannya</h5>
						<p class="card-text">Bertempat di Wall Climbing Mahasiswa Pecinta Kelestarian Alam (Mahapeka) UIN Bandung,15 anggota muda Mahapeka mengikuti upacara pelepasan Bakti Sosial (Baksos) dan Penyuluhan Lingkungan Hidup (PLH) ke-35 pada Selasa, 29 Juli 2025..</p>
						<a href="<?= base_url('post') ?>" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="card h-100 shadow-sm">
					<div class="card-body">
						<h5 class="card-title">Renjana Buana Gelar Aksi Penanaman Pohon Peringati Dies Natalis ke-10 Unusia</h5>
						<p class="card-text">Dalam rangka memperingati Dies Natalis ke-10 Universitas Nahdlatul Ulama Indonesia (Unusia), Unit Kegiatan Mahasiswa (UKM) MPA. Renjana Buana menyelenggarakan aksi penanaman pohon sebagai wujud nyata cinta lingkungan. Kegiatan ini berlangsung di area Laboratorium Unusia, Bogor, dengan mengusung semangat pelestarian alam yang menyatukan berbagai elemen kampus.</p>
						<a href="<?= base_url('post') ?>" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="card h-100 shadow-sm">
					<div class="card-body">
						<h5 class="card-title">Sispala Natha Mandala Jepara Tuntaskan Ekspedisi Pertamanya ke Gunung Muria</h5>
						<p class="card-text">Ekstrakurikuler Siswa Pencinta Alam (Sispala) Natha Mandala SMKN 1 Bangsri Jepara, lakukan ekspedisi ke puncak Songo Likur Gunung Muria via Desa Tempur, Kabupaten Jepara, Jawa Tengah. Pada Sabtu-Minggu, 24-25 Mei 2025.</p>
						<a href="<?= base_url('post') ?>" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top">
			<div class="container">
				&copy; <?= date('Y') ?>
			</div>
		</footer>
	</div>

	<!-- JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>