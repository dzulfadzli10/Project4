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

	<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container py-5">
        <h1 class="display-5 fw-bold">About</h1>
        
      </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h4 class="h4">Sejarah Kami</h4>
					<p>Wartapala Indonesia lahir dari semangat lapangan dan keresahan kolektif para aktivis pecinta alam terhadap kurangnya media yang secara khusus menyuarakan isu-isu lingkungan dari sudut pandang komunitas lapangan. Dimulai dari sekelompok anggota Mapala yang aktif dalam kegiatan konservasi dan ekspedisi, tercetuslah ide untuk mendirikan media alternatif yang tidak hanya menyampaikan informasi, tetapi juga menginspirasi.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h4 class="h4">Visi Misi</h4>
					<h5 class="h5">Visi</h5>
					<p>Menjadi media informasi terdepan bagi komunitas pecinta alam yang berperan aktif dalam edukasi, advokasi, dan penyebaran semangat konservasi di Indonesia.</p><br>
					<h5 class="h5">Misi</h5>
					<p>1. Menyediakan informasi yang akurat, inspiratif, dan edukatif seputar kegiatan alam bebas, lingkungan, dan konservasi.</p>
					<p>2. Menjadi wadah komunikasi dan kolaborasi antarorganisasi pecinta alam di seluruh nusantara.</p>
					<p>3. Meningkatkan kesadaran publik terhadap isu-isu lingkungan melalui konten kreatif dan partisipatif.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h4 class="h4">Tujuan Kami</h4>
					<p>untuk menyebarkan informasi seputar lingkungan dan dunia kepencintaalaman, mewadahi karya dari komunitas pecinta alam, serta membangun jaringan komunikasi antarorganisasi. Selain itu, Wartapala bertujuan menumbuhkan kepedulian terhadap alam, mendorong budaya literasi lingkungan, dan menginspirasi generasi muda agar aktif dalam menjaga kelestarian bumi.</p>
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