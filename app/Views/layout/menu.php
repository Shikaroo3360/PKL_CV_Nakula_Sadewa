<?php if (session()->get('level') == 1) { ?>
    <li class="nav-item dropdown">
        <a href="<?= site_url('home') ?>" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
        <a href="<?= site_url('log') ?>" class="nav-link"><i class="fas fa-fire"></i><span>Log</span></a>

    </li>
    <li class="menu-header">Queue Settings</li>
    <li class="nav-item dropdown">
        <a href="<?= site_url('layanan') ?>" class="nav-link "><i class="far fa-clipboard"></i> <span>Layanan</span></a>
        <a href="<?= site_url('loket') ?>" class="nav-link "><i class="far fa-file"></i> <span>Loket</span></a>
        <a href="<?= site_url('home') ?>" class="nav-link "><i class="fas fa-headphones"></i> <span>Customer Service</span></a>

    </li>
    <li class="menu-header">Queue Report</li>
    <li class="nav-item dropdown">
        <a href="<?= site_url('home') ?>" class="nav-link"><i class="fas fa-tv"></i><span>Perfoma Loket</span></a>
        <a href="<?= site_url('home') ?>" class="nav-link"><i class="fas fa-tv"></i><span>Perfoma Keseluruhan</span></a>
        <a href="<?= site_url('home') ?>" class="nav-link"><i class="fas fa-tv"></i><span>Data Laporan</span></a>
    </li>
    <li class="menu-header">Menu Setting</li>
    <li class="nav-item dropdown">
        <a href="<?= site_url('home') ?>" class="nav-link"><i class="fa fa-image"></i><span>Data Banner</span></a>
        <a href="<?= site_url('home') ?>" class="nav-link"><i class="fa fa-user"></i><span>Data User</span></a>
        <a href="<?= site_url('home') ?>" class="nav-link"><i class="fa fa-id-card"></i><span>Data Laporan</span></a>
    </li>
<?php   } ?>
<?php if (session()->get('level') == 2) { ?>
    <li class="nav-item dropdown">
        <a href="<?= site_url('home') ?>" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
        <a href="<?= site_url('log') ?>" class="nav-link"><i class="fas fa-fire"></i><span>Log</span></a>
        <a href="<?= site_url('home') ?>" class="nav-link"><i class="fa fa-user"></i><span>Data User</span></a>
    </li>
<?php   } ?>