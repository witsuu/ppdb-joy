<?= $this->extend('layouts/admin_dashboard_layout') ?>

<?= $this->section('head') ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <!-- Menampilkan error jika validasi gagal -->
    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger d-flex align-items-center alert-dismissible" role="alert">
            <div>
                <ul class="mb-0">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li class="text-danger"><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success d-flex align-items-center alert-dismissible" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="16" aria-label="Danger:" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </svg>
            <div>
                <?= session()->getFlashdata('success') ?>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="float-end">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-pengumuman">
            Tambah pengumuman
        </button>
    </div>

    <h1 class="h3 mb-3">Semua Pengumuman</h1>

    <?php foreach ($semua_pengumuman as $key => $pengumuman): ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="/admin/pengumuman/<?= $pengumuman['id'] ?>">
                            <h3 class="card-title"><?= $pengumuman['judul'] ?></h3>
                        </a>
                        <?= $pengumuman['isi'] ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>

<?= $this->section("scripts") ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>
<?= $this->endSection() ?>

<?= $this->section("modals") ?>
<?= view_cell('\App\Libraries\Widget::modalAddPengumuman') ?>
<?= $this->endSection() ?>