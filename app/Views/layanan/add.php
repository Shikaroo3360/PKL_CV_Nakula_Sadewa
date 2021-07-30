<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Create - Layanan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-button">
            <a href="<?= site_url('layanan') ?>" class="btn "><i class="fa fa-arrow-left"></i></a>
        </div>
        <h1>Layanan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= site_url() ?>">Home</a></div>
            <div class="breadcrumb-item"><a href="<?= site_url('layanan') ?>">Layanan</a></div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Create Layanan</h4>
        </div>
        <br>
        <div class="card-body col-md-6">
            <form action="<?= site_url('layanan') ?>" method="post" autocomplete="off">
                <?= csrf_field() ?>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kode </label>
                    <div class="col-sm-10">
                        <input type="text" name="kode" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Layanan </label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_layanan" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                                <input type="radio" name="status" id="Y" autocomplete="off" checked>Aktif
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="status" id="N" autocomplete="off">Tifak Aktif
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection() ?>