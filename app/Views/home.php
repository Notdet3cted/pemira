<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>PEMIRA 2021</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" inte grity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/assets/fa/css/all.css') ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/stisla/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/stisla/css/components.css') ?>">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">

</head>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="" class="navbar-brand sidebar-gone-hide">PEMIRA</a>
                <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                <div class="nav-collapse">
                    <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                </div>
            </nav>

            <nav class="navbar navbar-secondary navbar-expand-lg">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="<?= site_url('auth/logout') ?>" class="nav-link"><i class="far fa-heart"></i><span><?= session('pemilih') ?></span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- General JS Scripts -->
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
            <script src="<?= base_url("assets/stisla/js/stisla.js") ?>"></script>
            <script src="<?= base_url('/assets/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
            <!-- Template JS File -->
            <script src="<?= base_url('/assets/stisla/js/scripts.js') ?>"></script>
            <script src="<?= base_url('/assets/stisla/js/custom.js') ?>"></script>

            <!-- Main Content -->
            <div class="main-content">

            <div class="section-header">
            <h1 class='text-center'> <?= $title ?></h1>
          </div>

                <?= $this->renderSection("isi") ?>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>


    <script>
        $('.tombol-vote').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            const nama = $(this).data('nama');
            console.log('<?= $ormawa ?>')
            Swal.fire({
                html: 'Yakin Vote <b class = "text-success"> ' + nama + ' </b> ? </br></br>' +
                    'Vote tidak dapat dilakukan ulang, pikir baik-baik',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: 'green',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Vote'
            }).then((result) => {
                if (result.value) {

                    var paslon = $(this).data('paslon')
                    var pemilih = $(this).data('pemilih')
                
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('vote/vote') ?>",
                        data: {
                            <?= csrf_token() ?>: "<?= csrf_hash() ?>",
                            paslon: paslon,
                            pemilih: pemilih,
                            ormawa: '<?= $ormawa ?>',
                            sesi: '<?= $sesi ?>'
                        },
                        dataType: "JSON",
                        success: function(response) {
                           location.reload()
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                        }
                    })
                }
            });
        });
    </script>
</body>

</html>