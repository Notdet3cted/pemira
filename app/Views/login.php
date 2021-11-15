<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" inte grity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/assets/fa/css/all.css') ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/stisla/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/stisla/css/components.css') ?>">

</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="<?= base_url("assets/stisla/img/stisla-fill.svg") ?>" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>
                            <?php
                            if (session()->getFlashdata('pesan')) : ?>
                                <div class="alert alert-danger">
                                    <div class="alert-title"><?= session()->getflashdata('pesan') ?></div>
                                </div>
                            <?php endif ?>


                            <div class="card-body">
                                <form method="POST" action="<?= base_url('auth/proses') ?>" class="needs-validation" novalidate="">
                                    <?= csrf_field() ?>
                                    <div class="form-group">
                                        <label for="nim">NIM</label>
                                        <input id="nim" type="number" class="form-control" name="nim" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            NIM harus diisi
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                            <div class="invalid-feedback">
                                                Password tidak boleh kosong
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url("assets/js/stisla.js") ?>"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="<?= base_url('/assets/stisla/js/scripts.js') ?>"></script>
    <script src="<?= base_url('/assets/stisla/js/custom.js') ?>"></script>
</body>

</html>