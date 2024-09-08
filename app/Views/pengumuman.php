<?= $this->extend('layouts/landing_layout') ?>

<?= $this->section('head') ?>
<style>
    .header .header-content {
        min-height: 40vh;
        padding-top: 6rem;
    }

    .section {
        padding: 3rem 0;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="page-content">
    <header class="header">
        <div class="background-wrapper">
            <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <div class="bg"></div>
        </div>
        <div class="header-content">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-12">
                        <span class="h1 headline">
                            Semua Pengumuman
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section">
        <div class="container">
            <?php foreach ($semua_pengumuman as $key => $pengumuman): ?>
                <div class="row">
                    <div class="col-md-12 col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <a href="/pengumuman/<?= $pengumuman['id'] ?>">
                                    <h4><strong><?= $pengumuman['judul'] ?></strong></h4>
                                </a>
                                <div>
                                    <?= $pengumuman['isi'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>
<?= $this->endSection() ?>