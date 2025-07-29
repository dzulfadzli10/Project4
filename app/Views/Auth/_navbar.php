<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Myth:Auth</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><?= lang('Auth.home')?> <span class="sr-only">(<?= lang('Auth.current')?>)</span></a>
            </li>
        </ul>

        <!-- Tambahkan Form Pencarian di sini -->
        <form class="form-inline my-2 my-lg-0" action="<?= site_url('search') ?>" method="get">
            <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Cari..." aria-label="Search" required>
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cari</button>
        </form>
    </div>
</nav>
