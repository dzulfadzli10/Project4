<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MyBlog - Buat Postingan</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-label {
      font-weight: 600;
    }
    .editor {
      min-height: 250px;
    }
    .card-body {
      background-color: #ffffff;
    }
    .btn i {
      margin-right: 5px;
    }
    .btn:hover {
      opacity: 0.9;
    }
    .hero-section {
      background: linear-gradient(to right, #a1c4fd, #c2e9fb);
      color: #003049;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<?= $this->include('admin/navbar'); ?>

<!-- Hero Section -->
<div class="p-5 mb-4 hero-section rounded-3 shadow-sm">
  <div class="container py-4">
    <h1 class="display-5 fw-bold mb-0">
      <i class="bi bi-journal-plus text-primary"></i> Tambah Postingan Baru
    </h1>
    <p class="lead text-dark">Bagikan ide, cerita, atau inspirasi terbaikmu kepada dunia!</p>
  </div>
</div>

<!-- Form Section -->
<div class="container mb-5">
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <form action="" method="post" id="text-editor">
        <!-- Title -->
        <div class="mb-3">
          <label for="title" class="form-label">Judul</label>
          <input 
            type="text" 
            name="title" 
            id="title" 
            class="form-control" 
            placeholder="Contoh: Tips Menjaga Produktivitas di Era Digital" 
            required
          />
        </div>

        <!-- Content -->
        <div class="mb-3">
          <label for="content" class="form-label">Konten</label>
          <textarea 
            name="content" 
            id="content" 
            class="form-control editor" 
            rows="10" 
            placeholder="Tulis sesuatu yang bermanfaat, inspiratif, atau menarik..." 
            required
          ></textarea>
        </div>

        <!-- Action Buttons -->
        <div class="d-flex gap-2 flex-wrap">
          <button type="submit" name="status" value="published" class="btn btn-success" title="Publikasikan Artikel">
            <i class="bi bi-cloud-upload"></i> Publish
          </button>
          <button type="submit" name="status" value="draft" class="btn btn-warning text-white" title="Simpan ke Draft">
            <i class="bi bi-save2"></i> Simpan Draft
          </button>
          <button type="reset" class="btn btn-outline-danger" title="Hapus Semua Isian">
            <i class="bi bi-x-circle"></i> Reset
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<div class="container py-4">
  <footer class="pt-3 mt-4 text-muted border-top text-center">
    &copy; <?= date('Y') ?> | <strong>MyBlog CMS</strong> - Tempat Berkarya dengan Gaya
  </footer>
</div>

<!-- Scripts -->
<script src="<?= base_url('js/jquery.min.js') ?>"></script>
<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('content');
</script>

</body>
</html>
