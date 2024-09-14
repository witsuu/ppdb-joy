<?php foreach ($data as $key => $value): ?>
    <div class="modal fade" id="modal-verify-<?= $value['id'] ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="/admin/pendaftar/verify/<?= $value['id'] ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="modal-header">
                        <h5 class="modal-title">Verifikasi <?= $value['name'] ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <!-- <label class="form-label">Verifikasi</label> -->
                            <select name="verify" id="verify_select" class="form-select form-select-lg">
                                <option selected disabled>Verifikasi Pendaftar</option>
                                <option value="accepted">Terima</option>
                                <option value="reject">Belum Memenuhi Syarat</option>
                            </select>
                        </div>
                        <div class="mb-3 d-none" id="note_input">
                            <label class="form-label">Note</label>
                            <textarea name="notes" id="notes_textarea" class="form-control form-control-lg" placeholder="Masukkan Alasan" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const verify = document.querySelector("#verify_select");
        const notes = document.querySelector("#note_input");

        verify.addEventListener("change", () => {
            if (verify.value == "reject") {
                notes.classList.remove('d-none');
            } else {
                notes.classList.add('d-none');
            }
        });
    </script>
<?php endforeach; ?>