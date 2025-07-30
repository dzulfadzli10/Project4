<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>MyBlog</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

	<style>
		body {
			background-color: #f0f4f8;
			color: #000;
		}

		.navbar {
			background-color: #000; /* Navbar hitam pekat */
		}

		.navbar .navbar-brand,
		.navbar .nav-link {
			color: #fff !important; /* Tulisan navbar putih */
			transition: color 0.3s ease;
		}

		.navbar .nav-link:hover,
		.navbar .nav-link.active {
			color: #0d6efd !important; /* Biru cerah saat hover dan aktif */
			font-weight: 600;
		}

		section.text-center.py-5 {
			background: linear-gradient(90deg, #007bff 0%, #00c6ff 100%);
			color: white;
			box-shadow: 0 4px 8px rgb(0 0 0 / 0.1);
			border-radius: 0.5rem;
			margin-bottom: 2rem;
		}

		.card {
			border: none;
			border-radius: 0.5rem;
			box-shadow: 0 4px 12px rgb(13 110 253 / 0.15);
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}

		.card:hover {
			transform: translateY(-8px);
			box-shadow: 0 8px 20px rgb(13 110 253 / 0.3);
		}

		.card-title a {
			color: #0d6efd;
			text-decoration: none;
			transition: color 0.3s ease;
		}

		.card-title a:hover {
			color: #0056b3;
			text-decoration: underline;
		}

		.btn-primary {
			background-color: #0d6efd;
			border-color: #0d6efd;
			transition: background-color 0.3s ease, border-color 0.3s ease;
		}

		.btn-primary:hover {
			background-color: #0056b3;
			border-color: #004494;
		}

		footer {
			color: #6c757d;
			font-size: 0.9rem;
			text-align: center;
			margin-top: 3rem;
			padding-bottom: 1rem;
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-md fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
					<li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= base_url('post') ?>">Blog</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="text-center py-5 mt-5">
		<div class="container">
			<h1 class="display-5 fw-bold">Rilis Berita</h1>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<?php foreach ($posts as $post) : ?>
				<div class="col-md-12 my-3">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								<a href="/post/<?= $post['slug'] ?>"><?= $post['title'] ?></a>
							</h5>
							<p class="card-text"><?= substr(strip_tags($post['content']), 0, 120) ?>...</p>
							<a href="/post/<?= $post['slug'] ?>" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>

		<!-- PAGINATION -->
		<div class="d-flex justify-content-center my-4">
    		<?= $pager->links('default', 'pagination/bootstrap') ?>
		</div>
	</div>

	<footer class="container py-4">
		<div class="pt-3 mt-4 border-top text-muted">
			&copy; <?= date('Y') ?> Wartapala Indonesia
		</div>
	</footer>

	<!-- Jquery dan Bootstrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>