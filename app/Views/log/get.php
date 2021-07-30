<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data - Log</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Log</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= site_url() ?>">Home</a></div>
            <div class="breadcrumb-item"><a href="<?= site_url('log') ?>">Log</a></div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Data Log</h4>
        </div>
        <div class="section-body">
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>

                            <th>Waktu</th>
                            <th>User</th>
                            <th>Aktivitas</th>

                        </tr>
                        <?php foreach ($log as $key => $value) : ?>
                            <tr>

                                <td><?= $value->waktu; ?></td>
                                <td><?= $value->id_user; ?></td>
                                <td><?= $value->aktivitas; ?></td>
                                <!-- <td>
                                    <div class="badge badge-success">Active</div>
                                </td>
                                <td><a href="#" class="btn btn-secondary">Detail</a></td> -->
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>