<?= $this->extend('layouts/admin_dashboard_layout') ?>

<?= $this->section("head") ?>
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="/css/magnific-popup.css">

<style>
    .mfp-wrap,
    .mfp-bg {
        z-index: 2000 !important;
    }
</style>
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
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger d-flex align-items-center alert-dismissible" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="16" aria-label="Danger:" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
            <div>
                <?= session()->getFlashdata('error') ?>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="w-100 position-relative">
        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modal-add-pendaftar">Tambah Data</button>
        <h1 class="h3 mb-3">Manajemen Pendaftar</h1>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table1" class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Jenjang Pendidikan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $key => $user): ?>
                                    <tr>
                                        <td><?= $user['name'] ?></td>
                                        <td><?= $user['email'] ?></td>
                                        <td><?= $user['informasiPeserta']['jenjang_pendidikan'] ?></td>
                                        <td>
                                            <?php switch ($user['informasiPeserta']['status']) {
                                                case 'wait':
                                                    echo "<span class='text-warning fw-bold'>Menuggu</span>";
                                                    break;
                                                case 'reject':
                                                    echo "<span class='text-danger fw-bold'>Data belum memenuhi syarat</span>";
                                                    break;
                                                case 'accepted':
                                                    echo "<span class='text-success fw-bold'>Diterima</span>";
                                                    break;

                                                default:
                                                    break;
                                            } ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-edit-user-<?= $user['id'] ?>">Edit</button>
                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-<?= $user['id'] ?>">Hapus</button>
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-view-user-<?= $user['id'] ?>">Lihat</button>
                                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-verify-<?= $user['id'] ?>">Verifikasi</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section("scripts") ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.bootstrap5.js"></script>

<script>
    new DataTable("#table1");
</script>

<script src="/js/jquery.magnific-popup.min.js"></script>

<script>
    if (document.querySelector(".lihat-foto")) {
        $('.lihat-foto').magnificPopup({
            delegate: "a",
            type: "image",
            mainClass: "mfp-with-zoom mfp-img-mobile",
        });
    }
</script>
<?= $this->endSection() ?>

<?= $this->section("modals") ?>
<?= view_cell('\App\Libraries\Widget::modalDelete', ['data' => $users, 'url' => "/admin/pendaftar/delete/"]) ?>
<?= view_cell('\App\Libraries\Widget::modalEditPendaftar', ['data' => $users, 'url' => "/admin/pendaftar/update/"]) ?>
<?= view_cell('\App\Libraries\Widget::modalViewUser', ['data' => $users]) ?>
<?= view_cell('\App\Libraries\Widget::modalVerify', ['data' => $users]) ?>
<?= view_cell('\App\Libraries\Widget::modalAddPendaftar', ['semua_akun' => $akun]) ?>
<?= $this->endSection() ?>