<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin PEMIRA</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" inte grity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/assets/fa/css/all.css') ?>">

    <!-- CSS Libraries -->
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/toastr/toastr.min.css') ?>">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/select2/css/select2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/stisla/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/stisla/css/components.css') ?>">
    

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url('/assets/stisla/img/avatar/avatar-1.png') ?>" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block"><?= 'nama'; ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="<?= site_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">Stisla</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">St</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class=""><a class="nav-link" href="<?= site_url('dashboard') ?>"><i class="nav-icon fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="nav-icon fas fa-tags"></i><span>Tampil Data</span></a>
                            <ul class="dropdown-menu">
                                <li class=""><a class="nav-link" href="<?= site_url('admin/dpm/tampil') ?>"><i class="fas fa-percent"></i>DPM</a></li>
                                <li class=""><a class="nav-link" href="<?= site_url('admin/bem/tampil') ?>"><i class="fab fa-bitcoin"></i>BEM</a></li>
                                <li class=""><a class="nav-link" href="<?= site_url('admin/pemilih/tampil') ?>"><i class="fab fa-bitcoin"></i>Pemilih</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="nav-icon fas fa-tags"></i><span>Input Data</span></a>
                            <ul class="dropdown-menu">
                                <li class=""><a class="nav-link" href="<?= site_url('admin/dpm/input') ?>"><i class="fas fa-percent"></i>DPM</a></li>
                                <li class=""><a class="nav-link" href="<?= site_url('admin/bem/input') ?>"><i class="fab fa-bitcoin"></i>BEM</a></li>
                                <li class=""><a class="nav-link" href="<?= site_url('admin/pemilih/input') ?>"><i class="fab fa-bitcoin"></i>Pemilih</a></li>
                            </ul>
                        </li>

                    </ul>
                    
                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                            <i class="fas fa-rocket"></i> Logout
                        </a>
                    </div>
                </aside>
            </div>
            <!-- General JS Scripts -->
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
            <!-- SweetAlert2 -->
            <script src="<?= base_url('/assets/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
            <!-- Toastr -->
            <script src="<?= base_url('/assets/plugins/toastr/toastr.min.js') ?>"></script>
            <!-- Select2 -->
            <script src="<?= base_url('/assets/plugins/select2/js/select2.full.min.js') ?>"></script>
            <script src="<?= base_url('/assets/stisla/js/stisla.js') ?>"></script>
            <!-- Datatables -->
            <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

            <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>


            <script src=" <?= base_url('/assets/plugins/webcam/webcam.min.js') ?>"></script>
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
            <!-- JS Libraies -->

            <!-- Template JS File -->
            <script src="<?= base_url('/assets/stisla/js/scripts.js') ?>"></script>
            <script src="<?= base_url('/assets/stisla/js/custom.js') ?>"></script>
            <!-- Main Content -->
            <div class="main-content">

                <?php
                if (session()->getFlashdata('pesan')) : ?>
                    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan') ?>" data-flashicon="<?= session()->getFlashdata('icon') ?>"></div>
                <?php endif ?>

                <?= $this->renderSection("content") ?>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <script>
        const flashData = $('.flash-data ').data('flashdata');
        const flashIcon = $('.flash-data').data('flashicon');
        if (flashData) {
            Swal.fire({
                position: 'center',
                icon: flashIcon,
                title: flashData,
                showConfirmButton: false,
                timer: 1500
            });
        }

        //hapus
        $('.tombol-hapus').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            const nama = $(this).data('nama');
            Swal.fire({
                html: 'Yakin Hapus <b class = "text-danger"> ' + nama + ' </b> ? </br></br>' +
                    'Data yang akan dihapus tidak dapat dikembalikan',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#example1').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'pdfHtml5',
                        className: 'btn btn-primary'
                    },
                    {
                        extend: 'excelHtml5',
                        className: 'btn btn-primary'
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-primary',
                        title: 'Print Data',
                        exportOptions: {
                            modifier: {
                                page: '2'
                            },
                        },
                    }
                ]
            });
        });
    </script>

</body>

</html>