<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login</title>

    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Endqueue</span></h4>
                        <br>
                        <!-- untuk memunculkan validasi error yang ada di controler/auth -->
                        <div class="register-box-body">

                            <?= csrf_field() ?>
                            <?php $errors = session()->getFlashdata('errors');
                            if (!empty($errors)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        <?php foreach ($errors as $error) : ?>
                                            <li><?= esc($error) ?></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            <?php
                            } ?>
                            <?php
                            if (session()->getFlashdata('pesan')) {
                                echo '<div class="alert alert-success" role="alert">';
                                echo session()->getFlashdata('pesan');
                                echo '</div>';
                            }
                            ?>
                            <!-- end validation -->

                            <?php echo form_open('auth/cek_login');
                            ?>
                            <div class="form-group">
                                <label for="email">Username</label>
                                <input name="username" class="form-control">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <input type="password" name="password" class="form-control">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>

                            <div class="form-group text-right">

                                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                    Login
                                </button>
                            </div>
                            <?php echo form_close(); ?>
                            <div class="mt-5 text-center">
                                Don't have an account? <a href="register">Create new one</a>
                            </div>

                        </div>
                    </div>

                </div>
        </section>
    </div>
    <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
</body>

</html>