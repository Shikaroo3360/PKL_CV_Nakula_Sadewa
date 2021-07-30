<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Enqueue</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= site_url() ?>">Home</a></div>
            <div class="breadcrumb-item"><a href="<?= site_url() ?>">Dashboard</a></div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>User</h4>
                        </div>
                        <div class="card-body">
                            <?= $tot_user  ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-clipboard"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Layanan</h4>
                        </div>
                        <div class="card-body">
                            <?= $tot_layanan  ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Loket</h4>
                        </div>
                        <div class="card-body">
                            <?= $tot_loket  ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-headphones"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Cs</h4>
                        </div>
                        <div class="card-body">
                            <?= $tot_cs  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>