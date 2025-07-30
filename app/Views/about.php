<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>MyBlog</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
	<!-- Bootstrap Icons (optional) -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

	<style>
		body {
			background-color: #f0f4f8;
			color: #000 !important; /* Semua tulisan hitam */
		}

		.navbar {
			background-color: #212529; /* Navbar hitam */
		}

		.navbar .nav-link,
		.navbar .navbar-brand {
			color: #fff !important; /* Tulisan navbar putih */
		}

		.nav-link.active {
			font-weight: bold;
			color: #0d6efd !important; /* Link aktif tetap biru */
		}

		.hero {
			background: linear-gradient(135deg, #0d6efd, #00bfff);
			color: white;
		}

		.card {
			border: none;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
		}

		.card h4 {
			color: #0d6efd;
		}

		.card-body {
			background-color: #ffffff;
			border-radius: 0.5rem;
			color: #000; /* Pastikan isi card hitam */
		}

		footer {
			color: #6c757d;
			font-size: 0.9rem;
			text-align: center;
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url('about') ?>">About</a>
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
			</div>
		</div>
	</nav>

	<!-- Hero -->
	<section class="hero text-center py-5 mt-5">
		<div class="container">
			<h1 class="display-5 fw-bold">Tentang Wartapala Indonesia</h1>
			<p class="lead">Media informasi dan gerakan literasi lingkungan untuk pecinta alam Indonesia.</p>
		</div>
	</section>

	<!-- Konten -->
	<div class="container my-5">
		<div class="row g-4">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="h4">Sejarah Kami</h4>
						<p>Wartapala Indonesia lahir dari semangat lapangan dan keresahan kolektif para aktivis pecinta alam terhadap kurangnya media yang secara khusus menyuarakan isu-isu lingkungan dari sudut pandang komunitas lapangan. Dimulai dari sekelompok anggota Mapala yang aktif dalam kegiatan konservasi dan ekspedisi, tercetuslah ide untuk mendirikan media alternatif yang tidak hanya menyampaikan informasi, tetapi juga menginspirasi.</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="h4">Visi Misi</h4>
						<h5 class="h5 text-primary">Visi</h5>
						<p>Menjadi media informasi terdepan bagi komunitas pecinta alam yang berperan aktif dalam edukasi, advokasi, dan penyebaran semangat konservasi di Indonesia.</p>
						<h5 class="h5 text-primary">Misi</h5>
						<ul>
							<li>Menyediakan informasi yang akurat, inspiratif, dan edukatif seputar kegiatan alam bebas, lingkungan, dan konservasi.</li>
							<li>Menjadi wadah komunikasi dan kolaborasi antarorganisasi pecinta alam di seluruh nusantara.</li>
							<li>Meningkatkan kesadaran publik terhadap isu-isu lingkungan melalui konten kreatif dan partisipatif.</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="h4">Tujuan Kami</h4>
						<p>Untuk menyebarkan informasi seputar lingkungan dan dunia kepencintaalaman, mewadahi karya dari komunitas pecinta alam, serta membangun jaringan komunikasi antarorganisasi. Selain itu, Wartapala bertujuan menumbuhkan kepedulian terhadap alam, mendorong budaya literasi lingkungan, dan menginspirasi generasi muda agar aktif dalam menjaga kelestarian bumi.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="container py-4">
		<footer class="pt-3 mt-4 border-top">
			&copy; <?= date('Y') ?> Wartapala Indonesia
		</footer>
	</div>

	<!-- JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>
