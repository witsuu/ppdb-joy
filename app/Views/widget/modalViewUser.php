<?php foreach ($data as $key => $value): ?>
    <div class="modal fade" id="modal-view-user-<?= $value['id'] ?>" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="float-start" style="font-size: 1rem;">
                        <span>Status:</span>
                        <?php
                        if (isset($value['informasiPeserta']['status'])) {
                            switch ($value['informasiPeserta']['status']) {
                                case 'wait':
                                    echo "<span class='text-warning fw-bold'>Menuggu</span>";
                                    break;
                                case 'reject':
                                    echo "<span class='text-danger fw-bold'>Ditolak</span>";
                                    break;
                                case 'accepted':
                                    echo "<span class='text-success fw-bold'>Diterima</span>";
                                    break;

                                default:
                                    break;
                            }
                        } else {
                            echo "<span class='text-danger fw-bold'>Tidak Ada Data</span>";
                        }
                        ?>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-start">
                        <div class="col-12">
                            <h4>Data Pengguna</h4>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row align-items-center mb-2">
                                <div class="col-4">
                                    <span>Nama Lengkap</span>
                                </div>
                                <div class="col">
                                    <span class="me-3">:</span>
                                    <span><?= $value['name'] ?? "" ?></span>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-4">
                                    <span>Nama Panggilan</span>
                                </div>
                                <div class="col">
                                    <span class="me-3">:</span>
                                    <span><?= $value['informasiPeserta']['nama_panggilan'] ?? "" ?></span>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-4">
                                    <span>Email</span>
                                </div>
                                <div class="col">
                                    <span class="me-3">:</span>
                                    <span><?= $value['email'] ?? "" ?></span>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-4">
                                    <span>NIK</span>
                                </div>
                                <div class="col">
                                    <span class="me-3">:</span>
                                    <span><?= $value['informasiPeserta']['nik'] ?? "" ?></span>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-4">
                                    <span>No. KK</span>
                                </div>
                                <div class="col">
                                    <span class="me-3">:</span>
                                    <span><?= $value['informasiPeserta']['no_kk'] ?? "" ?></span>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-4">
                                    <span>Alamat</span>
                                </div>
                                <div class="col">
                                    <span class="me-3">:</span>
                                    <span><?= $value['informasiPeserta']['alamat_lengkap'] ?? "" ?></span>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-4">
                                    <span>Tempat dan Tanggal Lahir</span>
                                </div>
                                <div class="col">
                                    <span class="me-3">:</span>
                                    <span><?= $value['informasiPeserta']['tempat_lahir'] ?? "" ?>, <?= $value['informasiPeserta']['tanggal_lahir'] ?? "" ?></span>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-4">
                                    <span>Jenjang Pendidikan</span>
                                </div>
                                <div class="col">
                                    <span class="me-3">:</span>
                                    <span><?= $value['informasiPeserta']['jenjang_pendidikan'] ?? "" ?></span>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-4">
                                    <span>Asal Sekolah</span>
                                </div>
                                <div class="col">
                                    <span class="me-3">:</span>
                                    <span><?= $value['informasiPeserta']['asal_sekolah'] ?? "" ?></span>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-4">
                                    <span>Anak Ke</span>
                                </div>
                                <div class="col">
                                    <span class="me-3">:</span>
                                    <span><?= $value['informasiPeserta']['anak_ke'] ?? "" ?></span>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-4">
                                    <span>Jumlah Saudara</span>
                                </div>
                                <div class="col">
                                    <span class="me-3">:</span>
                                    <span><?= $value['informasiPeserta']['jumlah_anak'] ?? "" ?></span>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col-4">
                                    <span>No. Hp</span>
                                </div>
                                <div class="col">
                                    <span class="me-3">:</span>
                                    <span><?= $value['informasiPeserta']['no_hp'] ?? "" ?></span>
                                </div>
                            </div>
                        </div>
                        <?php if ($value['informasiAyah']): ?>
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
                                            <span><?= $value['informasiAyah']['nama'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>NIK</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $value['informasiAyah']['nik'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Tempat dan Tanggal Lahir</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $value['informasiAyah']['tempat_lahir'] ?>, <?= $value['informasiAyah']['tanggal_lahir'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Pendidikan</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $value['informasiAyah']['pendidikan'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Pekerjaan</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $value['informasiAyah']['pekerjaan'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Pendapatan</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $value['informasiAyah']['pendapatan'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>No. Hp</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $value['informasiAyah']['no_hp'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($value['informasiIbu']): ?>
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
                                            <span><?= $value['informasiIbu']['nama'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>NIK</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $value['informasiIbu']['nik'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Tempat dan Tanggal Lahir</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $value['informasiIbu']['tempat_lahir'] ?>, <?= $value['informasiIbu']['tanggal_lahir'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Pendidikan</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $value['informasiIbu']['pendidikan'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Pekerjaan</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $value['informasiIbu']['pekerjaan'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>Pendapatan</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $value['informasiIbu']['pendapatan'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-2">
                                        <div class="col-4">
                                            <span>No. Hp</span>
                                        </div>
                                        <div class="col">
                                            <span class="me-3">:</span>
                                            <span><?= $value['informasiIbu']['no_hp'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($value['dokumen']): ?>
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
                                        <a href="/image/<?= $value['dokumen']['foto'] ?>" class="btn btn-primary">Lihat Foto</a>
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
                                        <a href="/image/<?= $value['dokumen']['foto_akte'] ?>" class="btn btn-primary">Lihat Foto</a>
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
                                        <a href="/image/<?= $value['dokumen']['foto_kk'] ?>" class="btn btn-primary">Lihat Foto</a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($value['informasiPeserta']['note'])): ?>
                            <div class="col-12 mt-4">
                                <h4>Catatan</h4>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <span><?= $value['informasiPeserta']['note'] ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>