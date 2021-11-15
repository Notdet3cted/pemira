<?= $this->extend('template') ?>

<?= $this->section("content") ?>
<section class="section">
    <div class="section-header">
        <h1>Admin Pemira</h1>
    </div>
</section>

<!-- Main content -->
<section class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Aktivitas Hari Ini</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="fas fa-cash-register"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Transaksi</h4>
                                </div>
                                <div class="card-body">
                                    <?= $thi ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Pemasukkan</h4>
                                </div>
                                <div class="card-body">
                                    <?= $tp ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-box"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Diterima</h4>
                                </div>
                                <div class="card-body">
                                    <?= $terima ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-diagnoses"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Diproses</h4>
                                </div>
                                <div class="card-body">
                                    <?= $proses ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-check-double"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Selesai</h4>
                                </div>
                                <div class="card-body">
                                    <?= $selesai ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fas fa-people-carry"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Diambil</h4>
                                </div>
                                <div class="card-body">
                                    <?= $ambil ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Top 10 Member</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Member</th>
                                <th>Nama Member</th>
                                <th>Point</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 1; $i > 5; $i++) {

                            ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $i ?></td>
                                    <td><?= $i ?></td>
                                    <td><?= $i ?></td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>


        </div>


    </div>


</section>
<!-- /.content -->
<?= $this->endSection(); ?>