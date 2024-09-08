<div class="modal fade" id="modal-edit-pengumuman-<?= $pengumuman['id'] ?>" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form action="/admin/pengumuman/update/<?= $pengumuman['id'] ?>" method="post">
                <?= csrf_field() ?>
                <div class="modal-header">
                    <h5 class="modal-title">Edit Pengumuman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" id="judul" value="<?= old('judul', $pengumuman['judul']) ?>" class="form-control form-control-lg">
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi</label>
                        <textarea name="isi" id="isi" class="form-control"><?= old('isi', $pengumuman['isi']) ?></textarea>
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