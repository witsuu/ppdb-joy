<?= $this->extend('layouts/user_dashboard_layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="alert alert-info d-flex align-items-center alert-dismissible" role="alert">
        <div>
            <span>Wording pengumuman</span>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <h1 class="h3 mb-3"><strong>User</strong> Dashboard</h1>

    <div class="row">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Aktivitas Terakhir
                    </div>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5 d-flex order-1 order-xxl-1">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title mb-0">Kalender</h5>
                </div>
                <div class="card-body d-flex">
                    <div class="align-self-center w-100">
                        <div class="chart">
                            <div id="datetimepicker-dashboard"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var date = new Date(Date.now());
        var defaultDate = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();
        document.getElementById("datetimepicker-dashboard").flatpickr({
            inline: true,
            prevArrow: "<span title=\"Previous month\">&laquo;</span>",
            nextArrow: "<span title=\"Next month\">&raquo;</span>",
            defaultDate: defaultDate
        });
    });
</script>
<?= $this->endSection() ?>