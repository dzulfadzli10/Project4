<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>MyBlog</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
	<!-- Bootstrap Icons (optional) -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

	<style>
		body {
			color: #000;
		}

		.bg-blue-light {
			background: linear-gradient(135deg, #e0f0ff, #f8fbff);
		}

		.card-blue {
			background-color: #f0f8ff;
			border-left: 5px solid #007bff;
			box-shadow: 0 2px 4px rgba(0, 123, 255, 0.1);
		}

		.card-blue h5 {
			color: #0056b3;
		}

		.header-section {
			background: linear-gradient(to right, #007bff, #3399ff);
			color: white;
			padding: 60px 0;
		}
	</style>
</head>

<body>

	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('post') ?>">Blog</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
					<li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= base_url('faqs') ?>">FAQ</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- HEADER / TITLE -->
	<section class="header-section text-center mt-5">
		<div class="container">
			<h1 class="display-4 fw-bold">FAQ</h1>
			<p class="lead">Pertanyaan yang sering ditanyakan tentang Wartapala Indonesia</p>
		</div>
	</section>

	<!-- CONTENT -->
	<div class="container py-5">
		<div class="row g-4">

			<div class="col-md-12 card card-blue p-4">
				<h5><i class="bi bi-question-circle-fill me-2"></i>Apa itu Wartapala Indonesia?</h5>
				<p>Wartapala Indonesia adalah media informasi yang dibangun oleh komunitas pecinta alam untuk menyuarakan isu lingkungan, membagikan kisah perjalanan, serta menjadi ruang edukasi dan kolaborasi antar organisasi pecinta alam di Indonesia.</p>
			</div>

			<div class="col-md-12 card card-blue p-4">
				<h5><i class="bi bi-people-fill me-2"></i>Siapa saja yang bisa berkontribusi di Wartapala Indonesia?</h5>
				<p>Semua individu atau komunitas yang memiliki semangat konservasi, pengalaman di alam bebas, atau opini terkait isu lingkungan dapat berkontribusi melalui tulisan, foto, maupun laporan kegiatan.</p>
			</div>

			<div class="col-md-12 card card-blue p-4">
				<h5><i class="bi bi-send-fill me-2"></i>Bagaimana cara mengirimkan tulisan atau dokumentasi?</h5>
				<p>Kamu bisa mengirimkan naskah, artikel, atau foto melalui email resmi kami atau mengisi formulir kontribusi yang tersedia di halaman "Kontak".</p>
			</div>

			<div class="col-md-12 card card-blue p-4">
				<h5><i class="bi bi-building-fill me-2"></i>Apakah Wartapala Indonesia merupakan organisasi resmi?</h5>
				<p>Wartapala Indonesia adalah inisiatif independen berbasis komunitas yang bersifat terbuka, bersinergi dengan berbagai organisasi pecinta alam tanpa terikat struktur formal tertentu.</p>
			</div>

		</div>
	</div>

	<!-- FOOTER -->
	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top text-center">
			&copy; <?= date('Y') ?> Wartapala Indonesia
		</footer>
	</div>

	<!-- JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>
