<?= $this->extend('layouts/auth_layout') ?>

<?= $this->section('content') ?>

<div class="text-center mt-4">
    <h1 class="h2">Masuk</h1>
    <p class="lead">
        Masuk ke akun kamu untuk melanjutkan
    </p>
</div>

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

<div class="card">
    <div class="card-body">
        <div class="m-sm-3">
            <form action="/auth/login" method="post">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control form-control-lg" type="email" name="email" required placeholder="Masukkan email kamu" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control form-control-lg" type="password" name="password" min="6" placeholder="Masukkan password kamu" required />
                </div>
                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn btn-lg btn-primary">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="text-center mb-3">
    Tidak punya akun? <a href="/register">Daftar</a>
</div>

<?= $this->endSection() ?>