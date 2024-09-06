<?= $this->extend('layouts/auth_layout') ?>

<?= $this->section('content') ?>
<div class="text-center mt-4">
    <h1 class="h2">Daftar</h1>
</div>

<div class="card">
    <div class="card-body">
        <div class="m-sm-3">
            <form action="/auth/register" method="post">
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input class="form-control form-control-lg" type="text" name="name" placeholder="Masukkan nama lengkap" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan email" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan password" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Konfirmasi Password</label>
                    <input class="form-control form-control-lg" type="password" name="password_confirm" placeholder="Masukkan password" />
                </div>
                <?php if (isset($validation)): ?>
                    <div style="color: red;" class="mb-3">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif; ?>
                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn btn-lg btn-primary">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="text-center mb-3">
    Sudah mempunyai akun? <a href="/login">Masuk</a>
</div>

<?= $this->endSection() ?>