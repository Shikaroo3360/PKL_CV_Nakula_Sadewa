<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data - Layanan</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Layanan</h1>
        <div class="section-header-button">
            <a href="<?= site_url('layanan/add') ?>" class="btn btn-primary ">Tambah</a>
        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= site_url() ?>">Home</a></div>
            <div class="breadcrumb-item"><a href="<?= site_url('layanan') ?>">Layanan</a></div>
        </div>
    </div>
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Success !</b>
                <?= session()->getFlashdata('success') ?>
            </div>
        </div>
    <?php endif;  ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Error !</b>
                <?= session()->getFlashdata('error') ?>
            </div>
        </div>
    <?php endif;  ?>
    <div class="card">
        <div class="card-header">
            <h4>Data Layanan</h4>
        </div>
        <div class="section-body">
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Layanan</th>
                            <th>IP Voice</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                        <?php foreach ($layanan as $key => $value) : ?>
                            <tr>
                                <td><?= $value->kode; ?></td>
                                <td><?= $value->nama_layanan; ?></td>
                                <td><?= $value->id_setting_ip; ?></td>
                                <td>
                                    <div class="badge badge-success">
                                        <?= $value->status; ?>
                                    </div>
                                </td>
                                <td>
                                    <a href="<?= site_url('layanan/edit/' . $value->id_layanan) ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="<?= site_url('layanan/' . $value->id_layanan) ?>" method="post" class="d-inline" onsubmit="return confirm('Yaki hapus data ?')">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>