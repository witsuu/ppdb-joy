<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?? "Dashboard" ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="/site.webmanifest">

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="/css/app.css" rel="stylesheet">

    <?= $this->renderSection('head') ?>

    <style>
        body {
            font-family: "Nunito Sans", sans-serif;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="/admin/dashboard">
                    <span class="align-middle">PSB Al-AZHAR</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Menu
                    </li>

                    <li class="sidebar-item <?= set_active('admin/dashboard') ?>">
                        <a class="sidebar-link <?= set_active('admin/dashboard') ?>" href="/admin/dashboard">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= set_active('admin/pengguna') ?>">
                        <a class="sidebar-link <?= set_active('admin/pengguna') ?>" href="/admin/pengguna">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Manajemen Pengguna</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= set_active('admin/pendaftar') ?>">
                        <a class="sidebar-link <?= set_active('admin/pendaftar') ?>" href="/admin/pendaftar">
                            <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Manajemen Pendaftar</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= set_active('admin/laporan') ?>">
                        <a class="sidebar-link <?= set_active('admin/laporan') ?>" href="/admin/laporan">
                            <i class="align-middle" data-feather="file-text"></i> <span class="align-middle">Laporan Pendaftar</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?= set_active('admin/pengumuman') ?>">
                        <a class="sidebar-link <?= set_active('admin/pengumuman') ?>" href="/admin/pengumuman">
                            <i class="align-middle" data-feather="hash"></i> <span class="align-middle">Pengumuman</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <span class="text-dark"><?= session()->get('user_name') ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="/logout">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <?= $this->renderSection('content') ?>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="#" target="_blank"><strong>PPDB</strong></a> <a class="text-muted" href="#" target="_blank"><strong>Al - Azhar</strong></a> &copy; <?= date('Y') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <?= $this->renderSection('modals') ?>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
    <script src="/js/app.js"></script>

    <?= $this->renderSection('scripts') ?>
</body>

</html>