<?= $this->extend('layouts/landing_layout') ?>

<?= $this->section('head') ?>
<style>
    .section {
        padding: 8rem 0 3rem;
        min-height: 85vh;
    }

    .section .card {
        min-height: 50vh;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="page-content">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <a href="/pengumuman/<?= $pengumuman['id'] ?>">
                                <h4><strong><?= $pengumuman['judul'] ?></strong></h4>
                            </a>
                            <hr>
                            <div>
                                <?= $pengumuman['isi'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>