<?= $this->extend('layouts/user_dashboard_layout') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="/css/magnific-popup.css">

<style>
    .card-title {
        font-size: 1.25rem;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid p-0">
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

    <h1 class="h3 mb-3">PPDB (Pendaftaran Peserta Didik Baru)</h1>

    <div class="row">
        <div class="col-12">
            <!-- Menampilkan error jika validasi gagal -->
            <?php if (session()->getFlashdata('errors')): ?>
                <ul>
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li class="text-danger"><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if ($userPpdb['informasiPeserta']): ?>
                <div class="card">
                    <div class="card-header">
                        <?php if ($userPpdb['informasiPeserta']['status'] != 'accepted'): ?>
                            <div class="float-end">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-edit-ppdb">Edit Submit</a>
                            </div>
                        <?php endif; ?>
                        <h5 class="card-title mb-0 float-left">Riwayat Pendaftaran</h5>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-start">
                            <div class="col-12">
                                <div class="float-end" style="font-size: 1rem;">
                                    <span>Status:</span>
                                    <?php
                                    switch ($userPpdb['informasiPeserta']['status']) {
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
                                    }
                                    ?>
                                </div>
                                <h4>Data Peserta</h4>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <div class="row align-items-center mb-2">
                                    <div class="col-4">
                                        <span>Nama Lengkap</span>
                                    </div>
                                    <div class="col">
                                        <span class="me-3">:</span>
                                        <span><?= $userPpdb['name'] ?></span>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-4">
                                        <span>Nama Panggilan</span>
                                    </div>
                                    <div class="col">
                                        <span class="me-3">:</span>
                                        <span><?= $userPpdb['informasiPeserta']['nama_panggilan'] ?></span>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-4">
                                        <span>NIK</span>
                                    </div>
                                    <div class="col">
                                        <span class="me-3">:</span>
                                        <span><?= $userPpdb['informasiPeserta']['nik'] ?></span>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-4">
                                        <span>No. KK</span>
                                    </div>
                                    <div class="col">
                                        <span class="me-3">:</span>
                                        <span><?= $userPpdb['informasiPeserta']['no_kk'] ?></span>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-4">
                                        <span>Alamat</span>
                                    </div>
                                    <div class="col">
                                        <span class="me-3">:</span>
                                        <span><?= $userPpdb['informasiPeserta']['alamat_lengkap'] ?></span>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-4">
                                        <span>Tempat dan Tanggal Lahir</span>
                                    </div>
                                    <div class="col">
                                        <span class="me-3">:</span>
                                        <span><?= $userPpdb['informasiPeserta']['tempat_lahir'] ?>, <?= $userPpdb['informasiPeserta']['tanggal_lahir'] ?></span>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-4">
                                        <span>Jenjang Pendidikan</span>
                                    </div>
                                    <div class="col">
                                        <span class="me-3">:</span>
                                        <span><?= $userPpdb['informasiPeserta']['jenjang_pendidikan'] ?></span>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-4">
                                        <span>Asal Sekolah</span>
                                    </div>
                                    <div class="col">
                                        <span class="me-3">:</span>
                                        <span><?= $userPpdb['informasiPeserta']['asal_sekolah'] ?></span>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-4">
                                        <span>Anak Ke</span>
                                    </div>
                                    <div class="col">
                                        <span class="me-3">:</span>
                                        <span><?= $userPpdb['informasiPeserta']['anak_ke'] ?></span>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-4">
                                        <span>Jumlah Saudara</span>
                                    </div>
                                    <div class="col">
                                        <span class="me-3">:</span>
                                        <span><?= $userPpdb['informasiPeserta']['jumlah_anak'] ?></span>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-2">
                                    <div class="col-4">
                                        <span>No. Hp</span>
                                    </div>
                                    <div class="col">
                                        <span class="me-3">:</span>
                                        <span><?= $userPpdb['informasiPeserta']['no_hp'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-12 mt-4">
                                    <h4>Data Ayah</h4>
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Nama</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $userPpdb['informasiAyah']['nama'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>NIK</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $userPpdb['informasiAyah']['nik'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Tempat dan Tanggal Lahir</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $userPpdb['informasiAyah']['tempat_lahir'] ?>, <?= $userPpdb['informasiAyah']['tanggal_lahir'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Pendidikan</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $userPpdb['informasiAyah']['pendidikan'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Pekerjaan</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $userPpdb['informasiAyah']['pekerjaan'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Pendapatan</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $userPpdb['informasiAyah']['pendapatan'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>No. Hp</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $userPpdb['informasiAyah']['no_hp'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-12 mt-4">
                                    <h4>Data Ibu</h4>
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Nama</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $userPpdb['informasiIbu']['nama'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>NIK</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $userPpdb['informasiIbu']['nik'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Tempat dan Tanggal Lahir</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $userPpdb['informasiIbu']['tempat_lahir'] ?>, <?= $userPpdb['informasiIbu']['tanggal_lahir'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Pendidikan</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $userPpdb['informasiIbu']['pendidikan'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Pekerjaan</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $userPpdb['informasiIbu']['pekerjaan'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Pendapatan</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $userPpdb['informasiIbu']['pendapatan'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>No. Hp</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $userPpdb['informasiIbu']['no_hp'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <h4>Dokumen Peserta</h4>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <div class="row align-items-center mb-2">
                                    <div class="col-4">
                                        <span>Foto Peserta</span>
                                    </div>
                                    <div class="col lihat-foto">
                                        <span class="me-3">:</span>
                                        <a href="/image/<?= $userPpdb['dokumen']['foto'] ?>" class="btn btn-primary">Lihat Foto</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row align-items-center mb-2">
                                    <div class="col-4">
                                        <span>Foto Akte Kelahiran</span>
                                    </div>
                                    <div class="col lihat-foto">
                                        <span class="me-3">:</span>
                                        <a href="/image/<?= $userPpdb['dokumen']['foto_akte'] ?>" class="btn btn-primary">Lihat Foto</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row align-items-center mb-2">
                                    <div class="col-4">
                                        <span>Foto Kartu Keluarga</span>
                                    </div>
                                    <div class="col lihat-foto">
                                        <span class="me-3">:</span>
                                        <a href="/image/<?= $userPpdb['dokumen']['foto_kk'] ?>" class="btn btn-primary">Lihat Foto</a>
                                    </div>
                                </div>
                            </div>
                            <?php if (!empty($userPpdb['informasiPeserta']['note']) && $userPpdb['informasiPeserta']['status'] == 'reject'): ?>
                                <div class="col-12 mt-4">
                                    <h4>Catatan</h4>
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <span><?= $userPpdb['informasiPeserta']['note'] ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Formulir Pendaftaran</h5>
                    </div>
                    <div class="card-body">
                        <form action="/user/psb" method="post" enctype="multipart/form-data">
                            <div class="row justify-content-start">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">NIK</label>
                                    <input class="form-control form-control-lg" type="text" name="nik" required />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">No.KK</label>
                                    <input class="form-control form-control-lg" type="text" name="no_kk" required />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Jenjang Pendidikan</label>
                                    <select name="jenjang_pendidikan" id="" class="form-select form-select-lg" required>
                                        <option selected disabled>Pilih Jenjang Pendidikan</option>
                                        <option value="RA">RA</option>
                                        <option value="MI">MI</option>
                                        <option value="MTS">MTS</option>
                                        <option value="MA">MA</option>
                                    </select>
                                </div>
                                <!-- <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input class="form-control form-control-lg" type="text" name="nama_lengkap" />
                                </div> -->
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Nama Panggilan</label>
                                    <input class="form-control form-control-lg" type="text" name="nama_panggilan" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Alamat Lengkap</label>
                                    <input class="form-control form-control-lg" type="text" name="alamat_lengkap" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input class="form-control form-control-lg" type="text" name="tempat_lahir" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input class="form-control form-control-lg" type="date" name="tanggal_lahir" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Asal Sekolah</label>
                                    <input class="form-control form-control-lg" type="text" name="asal_sekolah" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Anak Ke-</label>
                                    <input class="form-control form-control-lg" type="number" name="anak_ke" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Jumlah Anak</label>
                                    <input class="form-control form-control-lg" type="number" name="jumlah_anak" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Nomor HP</label>
                                    <input class="form-control form-control-lg" type="tel" name="no_hp" required />
                                </div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-12 my-2">
                                    <h4>Data Ayah</h4>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Nama</label>
                                    <input class="form-control form-control-lg" type="text" name="nama_ayah" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input class="form-control form-control-lg" type="text" name="tempat_lahir_ayah" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input class="form-control form-control-lg" type="date" name="tanggal_lahir_ayah" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">NIK</label>
                                    <input class="form-control form-control-lg" type="number" name="nik_ayah" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Pekerjaan</label>
                                    <input class="form-control form-control-lg" type="text" name="pekerjaan_ayah" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Pendapatan</label>
                                    <input class="form-control form-control-lg" type="number" name="pendapatan_ayah" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Pendidikan</label>
                                    <input class="form-control form-control-lg" type="text" name="pendidikan_ayah" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">No. HP</label>
                                    <input class="form-control form-control-lg" type="tel" name="noHp_ayah" required />
                                </div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-12 my-2">
                                    <h4>Data Ibu</h4>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Nama</label>
                                    <input class="form-control form-control-lg" type="text" name="nama_ibu" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input class="form-control form-control-lg" type="text" name="tempat_lahir_ibu" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input class="form-control form-control-lg" type="date" name="tanggal_lahir_ibu" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">NIK</label>
                                    <input class="form-control form-control-lg" type="nnumber" name="nik_ibu" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Pekerjaan</label>
                                    <input class="form-control form-control-lg" type="text" name="pekerjaan_ibu" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Pendapatan</label>
                                    <input class="form-control form-control-lg" type="number" name="pendapatan_ibu" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">Pendidikan</label>
                                    <input class="form-control form-control-lg" type="text" name="pendidikan_ibu" required />
                                </div>
                                <div class="col-md-6 col-lg-4 mb-3">
                                    <label class="form-label">No. HP</label>
                                    <input class="form-control form-control-lg" type="tel" name="noHp_ibu" required />
                                </div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-12 my-2">
                                    <h4>Dokumen Peserta</h4>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Foto (Ukuran 3x4)</label>
                                    <input class="form-control form-control-lg" type="file" name="foto" accept="image/*" required />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Foto Akte Kelahiran</label>
                                    <input class="form-control form-control-lg" type="file" name="foto_akte" accept="image/*" required />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Foto Kartu Keluarga</label>
                                    <input class="form-control form-control-lg" type="file" name="foto_kk" accept="image/*" required />
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col">
                                    <button class="btn btn-success float-end" type="submit">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
<?php if ($userPpdb['informasiPeserta']): ?>
    <?= view_cell('\App\Libraries\Widget::modalEditPpdb', ['data' => $userPpdb, 'url' => "/user/psb/update/"]) ?>
<?php endif; ?>
<?= $this->endSection() ?>