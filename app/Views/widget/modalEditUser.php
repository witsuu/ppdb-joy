<?php foreach ($data as $key => $value): ?>
    <div class="modal fade" id="modal-edit-user-<?= $value['id'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="/admin/pengguna/update/<?= $value['id'] ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Pengguna</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input class="form-control form-control-lg" type="text" name="name" placeholder="Masukkan nama lengkap" required value="<?= $value['name'] ?>" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan email" required value="<?= $value['email'] ?>" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan password" />
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
<?php endforeach; ?>