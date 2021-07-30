<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data - Loket</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Loket</h1>
        <div class="section-header-button">
            <a href="<?= site_url('loket/add') ?>" class="btn btn-primary ">Tambah</a>
        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= site_url() ?>">Home</a></div>
            <div class="breadcrumb-item"><a href="<?= site_url('loket') ?>">Loket</a></div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Data Loket</h4>
        </div>
        <div class="section-body">
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Loket</th>
                            <th>IP Voice</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>