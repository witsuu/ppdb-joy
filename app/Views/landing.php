<?= $this->extend('layouts/landing_layout') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <header class="header">
        <div class="background-wrapper">
            <div class="logo-bg">
                <img src="/img/logo/al-azhar.png" alt="bg-logo" class="img-fluid w-100">
            </div>
            <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <div class="bg"></div>
            <div class="wave wave-bottom">
                <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 120" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <path style="transform:translate(0, 0px); opacity:1" fill="#ffffff" d="M0,12L60,10C120,8,240,4,360,12C480,20,600,40,720,58C840,76,960,92,1080,86C1200,80,1320,52,1440,46C1560,40,1680,56,1800,64C1920,72,2040,72,2160,78C2280,84,2400,96,2520,92C2640,88,2760,68,2880,64C3000,60,3120,72,3240,70C3360,68,3480,52,3600,40C3720,28,3840,20,3960,18C4080,16,4200,20,4320,36C4440,52,4560,80,4680,78C4800,76,4920,44,5040,38C5160,32,5280,52,5400,52C5520,52,5640,32,5760,20C5880,8,6000,4,6120,8C6240,12,6360,24,6480,36C6600,48,6720,60,6840,66C6960,72,7080,72,7200,74C7320,76,7440,80,7560,78C7680,76,7800,68,7920,72C8040,76,8160,92,8280,90C8400,88,8520,68,8580,58L8640,48L8640,120L8580,120C8520,120,8400,120,8280,120C8160,120,8040,120,7920,120C7800,120,7680,120,7560,120C7440,120,7320,120,7200,120C7080,120,6960,120,6840,120C6720,120,6600,120,6480,120C6360,120,6240,120,6120,120C6000,120,5880,120,5760,120C5640,120,5520,120,5400,120C5280,120,5160,120,5040,120C4920,120,4800,120,4680,120C4560,120,4440,120,4320,120C4200,120,4080,120,3960,120C3840,120,3720,120,3600,120C3480,120,3360,120,3240,120C3120,120,3000,120,2880,120C2760,120,2640,120,2520,120C2400,120,2280,120,2160,120C2040,120,1920,120,1800,120C1680,120,1560,120,1440,120C1320,120,1200,120,1080,120C960,120,840,120,720,120C600,120,480,120,360,120C240,120,120,120,60,120L0,120Z"></path>
                </svg>
            </div>
        </div>
        <div class="header-content">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="row justify-content-start">
                            <div class="col-md-10 col-lg-6">
                                <span class="h1 headline">
                                    SITUS PPDB ONLINE AL-AZHAR
                                </span>
                                <span class="h2 headline">
                                    Tahun Pelajaran 2024/2025
                                </span>
                                <div class="header-description">
                                    <p>Untuk calon pendaftar tahun ajaran 2024/2025 bisa mendaftar melalui website ini.</p>
                                </div>
                                <a href="register" class="btn btn-success">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<?= $this->endSection() ?>