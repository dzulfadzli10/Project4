
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyBlog</title>

		<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
	<!-- Bootstrap Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
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
						<a class="nav-link" href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('about') ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url('contact') ?>">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="text-center py-5 mt-5 bg-light">
		<div class="container">
			<h1 class="display-5 fw-bold">Kontak Kami</h1>
		</div>
	</section>

	<div class="container">
	<div class="row">

		<!-- Alamat -->
		<div class="col-md-6 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<h5 class="card-title"><i class="bi bi-geo-alt-fill me-2"></i>Alamat</h5>
					<p class="card-text">Jl. Sawunggaling 1, Kav. Jemundo Blok D.15,, Kecamatan Taman,, Jemundo, Kec. Taman, Kabupaten Sidoarjo, Jawa Timur</p>
				</div>
			</div>
		</div>

		<!-- Email -->
		<div class="col-md-6 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<h5 class="card-title"><i class="bi bi-envelope-fill me-2"></i>Email</h5>
					<p class="card-text">wartapalaindo@gmai.com</p>
				</div>
			</div>
		</div>

		<!-- No HP -->
		<div class="col-md-6 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<h5 class="card-title"><i class="bi bi-telephone-fill me-2"></i>No. Telepon</h5>
					<p class="card-text">0815-5335-5330</p>
				</div>
			</div>
		</div>

		<!-- Tambahan: Jam Operasional -->
		<div class="col-md-6 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<h5 class="card-title"><i class="bi bi-clock-fill me-2"></i>Jam Operasional</h5>
					<p class="card-text">
						Senin – Jumat: 08.00 – 17.00 WIB<br>
						Sabtu – Minggu: Libur
					</p>
				</div>
			</div>
		</div>

		<!-- Sosial Media -->
		<div class="col-md-6 mb-4">
		<div class="card h-100">
			<div class="card-body">
			<h5 class="card-title"><i class="bi bi-share-fill me-2"></i>Sosial Media</h5>
			<div class="card-text d-flex flex-wrap gap-4 align-items-center">
				<a href="https://www.instagram.com/wartapalaindo" target="_blank" class="text-decoration-none text-dark d-flex align-items-center">
				<i class="bi bi-instagram me-1"></i>Instagram
				</a>
				<a href="https://www.tiktok.com/@wartapala.indonesia" target="_blank" class="text-decoration-none text-dark d-flex align-items-center">
				<i class="bi bi-tiktok me-1"></i>TikTok
				</a>
				<a href="https://www.facebook.com/wartapalaindonesia" target="_blank" class="text-decoration-none text-dark d-flex align-items-center">
				<i class="bi bi-facebook me-1"></i>Facebook
				</a>
				<a href="https://twitter.com/akunmu" target="_blank" class="text-decoration-none text-dark d-flex align-items-center">
				<i class="bi bi-twitter-x me-1"></i>X (Twitter)
				</a>
			</div>
			</div>
		</div>
		</div>


	</div>
</div>

	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top">
			<div class="container">
				&copy; <?= Date('Y') ?>
			</div>
		</footer>
	</div>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>