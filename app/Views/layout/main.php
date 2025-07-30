<!DOCTYPE html>
<html>
<head>
    <title><?= $this->renderSection('title') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Panggil navbar -->
<?= view('admin/navbar') ?>

<!-- Konten utama -->
<div class="container mt-5 pt-5">
    <?= $this->renderSection('content') ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
