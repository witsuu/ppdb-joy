    <div class="modal fade" id="modal-add-pendaftar" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <form action="#" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Pengguna</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-start">
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Pilih Akun</label>
                                <select name="user_id" id="" class="form-select form-select-lg" required>
                                    <option selected disabled>Pilih Akun</option>
                                    <?php foreach ($semua_akun as $key => $akun): ?>
                                        <option value="<?= $akun['id'] ?>"><?= $akun['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
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
                                <input class="form-control form-control-lg" type="number" name="nik_ibu" required />
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
                                <input class="form-control form-control-lg" type="file" name="foto" required />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Foto Akte Kelahiran</label>
                                <input class="form-control form-control-lg" type="file" name="foto_akte" required />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Foto Kartu Keluarga</label>
                                <input class="form-control form-control-lg" type="file" name="foto_kk" required />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>