<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Document</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        .main-export {
            display: block;
            width: 1440px;
            font-family: "Nunito Sans", sans-serif;
        }

        .col-12 {
            width: 100%;
        }

        .col-10 {
            width: 83.3333%;
        }

        .col-6 {
            width: 50%;
        }

        .col-4 {
            width: 33.3333%;
        }

        .col-3 {
            width: 25%;
        }

        .col-2 {
            width: 16.666%;
        }

        span {
            margin: 0 0 5px 0;
        }

        .foto-peserta {
            display: block;
            width: 420px;
            height: auto;
        }

        .foto-akte,
        .foto-kk {
            display: block;
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="main-export">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-12">
                    <div class="float-end" style="font-size: 1rem;">
                        <span>
                            <strong>Status: </strong>
                            <?php
                            switch ($userPpdb['informasiPeserta']['status']) {
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
                            ?>
                        </span>
                    </div>
                    <h4>Data Peserta</h4>
                    <hr>
                </div>
                <div class="col-12">
                    <div class="row align-items-center mb-2">
                        <div style="padding: 5px;">
                            <span><strong>Nama Lengkap :</strong> <?= $userPpdb['name'] ?></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div style="padding: 5px;">
                            <span style="padding: 5px;"><strong>Nama Panggilan :</strong> <?= $userPpdb['informasiPeserta']['nama_panggilan'] ?></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div style="padding: 5px;">
                            <span style="padding: 5px;"><strong>NIK :</strong> <?= $userPpdb['informasiPeserta']['nik'] ?></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div style="padding: 5px;">
                            <span style="padding: 5px;"><strong>No. KK</strong> <?= $userPpdb['informasiPeserta']['no_kk'] ?></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div style="padding: 5px;">
                            <span style="padding: 5px;"><strong>Alamat :</strong> <?= $userPpdb['informasiPeserta']['alamat_lengkap'] ?></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div style="padding: 5px;">
                            <span style="padding: 5px;"><strong>Tempat dan tanggal lahir :</strong> <?= $userPpdb['informasiPeserta']['tempat_lahir'] ?>, <?= $userPpdb['informasiPeserta']['tanggal_lahir'] ?></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div style="padding: 5px;">
                            <span style="padding: 5px;"><strong>Jenjang Pendidikan :</strong> <?= $userPpdb['informasiPeserta']['jenjang_pendidikan'] ?></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div style="padding: 5px;">
                            <span style="padding: 5px;"><strong>Asal Sekolah :</strong> <?= $userPpdb['informasiPeserta']['asal_sekolah'] ?></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div style="padding: 5px;">
                            <span style="padding: 5px;"><strong>Anak ke- :</strong> <?= $userPpdb['informasiPeserta']['anak_ke'] ?></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div style="padding: 5px;">
                            <span style="padding: 5px;"><strong>Jumlah saudara :</strong> <?= $userPpdb['informasiPeserta']['jumlah_anak'] ?></span>
                        </div>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div style="padding: 5px;">
                            <span style="padding: 5px;"><strong>No. Hp :</strong> <?= $userPpdb['informasiPeserta']['no_hp'] ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-12 mt-4">
                        <h4>Data Ayah</h4>
                        <hr>
                    </div>
                    <div class="col-12">
                        <div class="row align-items-center mb-2">
                            <div style="padding: 5px;">
                                <span><strong>Nama : </strong><?= $userPpdb['informasiAyah']['nama'] ?></span>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div style="padding: 5px;">
                                <span><strong>NIK : </strong> <?= $userPpdb['informasiAyah']['nik'] ?></span>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div style="padding: 5px;">
                                <span><strong>Tempat dan Tanggal Lahir :</strong> <?= $userPpdb['informasiAyah']['tempat_lahir'] ?>, <?= $userPpdb['informasiAyah']['tanggal_lahir'] ?></span>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div style="padding: 5px;">
                                <span><strong>Pendidikan :</strong> <?= $userPpdb['informasiAyah']['pendidikan'] ?></span>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div style="padding: 5px;">
                                <span><strong>Pekerjaan :</strong> <?= $userPpdb['informasiAyah']['pekerjaan'] ?></span>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div style="padding: 5px;">
                                <span><strong>Pendapatan :</strong> <?= $userPpdb['informasiAyah']['pendapatan'] ?></span>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div style="padding: 5px;">
                                <span><strong>No. Hp :</strong> <?= $userPpdb['informasiAyah']['no_hp'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-12 mt-4">
                        <h4>Data Ibu</h4>
                        <hr>
                    </div>
                    <div class="col-12">
                        <div class="row align-items-center mb-2">
                            <div style="padding: 5px;">
                                <span><strong>Nama :</strong> <?= $userPpdb['informasiIbu']['nama'] ?></span>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div style="padding: 5px;">
                                <span><strong>NIK :</strong> <?= $userPpdb['informasiIbu']['nik'] ?></span>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div style="padding: 5px;">
                                <span><strong>Tempat dan Tanggal Lahir :</strong> <?= $userPpdb['informasiIbu']['tempat_lahir'] ?>, <?= $userPpdb['informasiIbu']['tanggal_lahir'] ?></span>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div style="padding: 5px;">
                                <span><strong>Pendidikan :</strong> <?= $userPpdb['informasiIbu']['pendidikan'] ?></span>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div style="padding: 5px;">
                                <span><strong>Pekerjaan :</strong> <?= $userPpdb['informasiIbu']['pekerjaan'] ?></span>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div style="padding: 5px;">
                                <span><strong>Pendapatan :</strong> <?= $userPpdb['informasiIbu']['pendapatan'] ?></span>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div style="padding: 5px;">
                                <span><strong>No. Hp :</strong> <?= $userPpdb['informasiIbu']['no_hp'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <h4>Dokumen Peserta</h4>
                    <hr>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="row align-items-center mb-2">
                        <div class="col-2">
                            <span>Foto Santri</span>
                            <span class="me-3">:</span>
                        </div>
                        <div class="col-12 lihat-foto">
                            <a href="/image/<?= $userPpdb['dokumen']['foto'] ?>" class="foto-peserta">
                                <img src="<?= base_url('image/' . $userPpdb['dokumen']['foto']) ?>" alt="foto-peserta" class="img-fluid w-100">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="row align-items-center mb-2">
                        <div class="col-3">
                            <span>Foto Akte Kelahiran</span>
                            <span class="me-3">:</span>
                        </div>
                        <div class="col-10 lihat-foto">
                            <a href="/image/<?= $userPpdb['dokumen']['foto_akte'] ?>" class="foto-akte">
                                <img src="<?= base_url('image/' . $userPpdb['dokumen']['foto_akte']) ?>" alt="foto-akte" class="img-fluid w-100">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="row align-items-center mb-2">
                        <div class="col-3">
                            <span>Foto Kartu Keluarga</span>
                            <span class="me-3">:</span>
                        </div>
                        <div class="col-10 lihat-foto">
                            <a href="/image/<?= $userPpdb['dokumen']['foto_kk'] ?>" class="foto-kk">
                                <img src="<?= base_url('image/' . $userPpdb['dokumen']['foto_kk']) ?>" alt="foto-kk" class="img-fluid w-100">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="<? base_url('js/app.js') ?>"></script> -->

</body>

</html>