<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update - Layanan</title>
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
            <h4>Edit Layanan</h4>
        </div>
        <br>
        <div class="card-body col-md-6">
            <form action="<?= site_url('layanan/' . $layanan->id_layanan) ?>" method="post" autocomplete="off">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kode </label>
                    <div class="col-sm-10">
                        <input type="text" name="kode" value="<?= $layanan->kode ?>" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Layanan </label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_layanan" value="<?= $layanan->nama_layanan ?>" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">IP Voice </label>
                    <div class="col-sm-10">
                        <input type="text" name="kode" value="<?= $layanan->id_setting_ip ?>" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status </label>
                    <div class="col-sm-10">
                        <input type="text" name="kode" value="<?= $layanan->status ?>" class="form-control" required autofocus>
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i></button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection() ?>