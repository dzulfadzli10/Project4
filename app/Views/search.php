<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
  <h3>Hasil pencarian untuk: <em><?= esc($keyword) ?></em></h3>

  <?php if (empty($results)) : ?>
    <div class="alert alert-warning mt-3">Tidak ada hasil ditemukan.</div>
  <?php else : ?>
    <ul class="list-group mt-3">
      <?php foreach ($results as $post) : ?>
        <li class="list-group-item">
          <a href="<?= site_url('post/' . $post['slug']) ?>">
            <?= esc($post['title']) ?>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  <?php endif ?>
</div>

<?= $this->endSection() ?>
