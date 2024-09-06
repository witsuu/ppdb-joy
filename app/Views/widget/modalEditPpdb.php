<div class="modal fade" id="modal-edit-ppdb" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <form action="<?= $url . $data['id'] ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="modal-header">
                    <h5 class="modal-title">Edit Pengguna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-start">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">NIK</label>
                            <input class="form-control form-control-lg" type="text" name="nik" value="<?= $data['informasiPeserta']['nik'] ?>" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">No.KK</label>
                            <input class="form-control form-control-lg" type="text" name="no_kk" value="<?= $data['informasiPeserta']['no_kk'] ?>" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Jenjang Pendidikan</label>
                            <select name="jenjang_pendidikan" id="" class="form-select form-select-lg">
                                <option disabled>Pilih Jenjang Pendidikan</option>
                                <option <?= $data['informasiPeserta']['jenjang_pendidikan'] == "RA" ? "selected" : "" ?> value="RA">RA</option>
                                <option <?= $data['informasiPeserta']['jenjang_pendidikan'] == "MI" ? "selected" : "" ?> value="MI">MI</option>
                                <option <?= $data['informasiPeserta']['jenjang_pendidikan'] == "MTS" ? "selected" : "" ?> value="MTS">MTS</option>
                                <option <?= $data['informasiPeserta']['jenjang_pendidikan'] == "MA" ? "selected" : "" ?> value="MA">MA</option>
                            </select>
                        </div>
                        <!-- <div class="col-md-6 col-lg-4 mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input class="form-control form-control-lg" type="text" name="nama_lengkap" />
                            </div> -->
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Nama Panggilan</label>
                            <input class="form-control form-control-lg" type="text" name="nama_panggilan" value="<?= $data['informasiPeserta']['nama_panggilan'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Alamat Lengkap</label>
                            <input class="form-control form-control-lg" type="text" name="alamat_lengkap" required value="<?= $data['informasiPeserta']['alamat_lengkap'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input class="form-control form-control-lg" type="text" name="tempat_lahir" required value="<?= $data['informasiPeserta']['tempat_lahir'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input class="form-control form-control-lg" type="date" name="tanggal_lahir" required value="<?= $data['informasiPeserta']['tanggal_lahir'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Asal Sekolah</label>
                            <input class="form-control form-control-lg" type="text" name="asal_sekolah" required value="<?= $data['informasiPeserta']['asal_sekolah'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Anak Ke-</label>
                            <input class="form-control form-control-lg" type="number" name="anak_ke" required value="<?= $data['informasiPeserta']['anak_ke'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Jumlah Anak</label>
                            <input class="form-control form-control-lg" type="number" name="jumlah_anak" required value="<?= $data['informasiPeserta']['jumlah_anak'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Nomor HP</label>
                            <input class="form-control form-control-lg" type="tel" name="no_hp" required value="<?= $data['informasiPeserta']['no_hp'] ?>" />
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-12 my-2">
                            <h4>Data Ayah</h4>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Nama</label>
                            <input class="form-control form-control-lg" type="text" name="nama_ayah" value="<?= $data['informasiAyah']['nama'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input class="form-control form-control-lg" type="text" name="tempat_lahir_ayah" value="<?= $data['informasiAyah']['tempat_lahir'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input class="form-control form-control-lg" type="date" name="tanggal_lahir_ayah" value="<?= $data['informasiAyah']['tanggal_lahir'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">NIK</label>
                            <input class="form-control form-control-lg" type="number" name="nik_ayah" value="<?= $data['informasiAyah']['nik'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Pekerjaan</label>
                            <input class="form-control form-control-lg" type="text" name="pekerjaan_ayah" value="<?= $data['informasiAyah']['pekerjaan'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Pendapatan</label>
                            <input class="form-control form-control-lg" type="number" name="pendapatan_ayah" value="<?= $data['informasiAyah']['pendapatan'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Pendidikan</label>
                            <input class="form-control form-control-lg" type="text" name="pendidikan_ayah" value="<?= $data['informasiAyah']['pendidikan'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">No. HP</label>
                            <input class="form-control form-control-lg" type="tel" name="noHp_ayah" value="<?= $data['informasiAyah']['no_hp'] ?>" />
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-12 my-2">
                            <h4>Data Ibu</h4>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Nama</label>
                            <input class="form-control form-control-lg" type="text" name="nama_ibu" value="<?= $data['informasiIbu']['nama'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input class="form-control form-control-lg" type="text" name="tempat_lahir_ibu" value="<?= $data['informasiIbu']['tempat_lahir'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input class="form-control form-control-lg" type="date" name="tanggal_lahir_ibu" value="<?= $data['informasiIbu']['tanggal_lahir'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">NIK</label>
                            <input class="form-control form-control-lg" type="number" name="nik_ibu" value="<?= $data['informasiIbu']['nik'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Pekerjaan</label>
                            <input class="form-control form-control-lg" type="text" name="pekerjaan_ibu" value="<?= $data['informasiIbu']['pekerjaan'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Pendapatan</label>
                            <input class="form-control form-control-lg" type="number" name="pendapatan_ibu" value="<?= $data['informasiIbu']['pendapatan'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">Pendidikan</label>
                            <input class="form-control form-control-lg" type="text" name="pendidikan_ibu" value="<?= $data['informasiIbu']['pendidikan'] ?>" />
                        </div>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <label class="form-label">No. HP</label>
                            <input class="form-control form-control-lg" type="tel" name="noHp_ibu" value="<?= $data['informasiIbu']['no_hp'] ?>" />
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-12 my-2">
                            <h4>Dokumen Peserta</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Foto (Ukuran 3x4)</label>
                            <input class="form-control form-control-lg" type="file" name="foto" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Foto Akte Kelahiran</label>
                            <input class="form-control form-control-lg" type="file" name="foto_akte" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Foto Kartu Keluarga</label>
                            <input class="form-control form-control-lg" type="file" name="foto_kk" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>