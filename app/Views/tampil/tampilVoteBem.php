<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1> Data Pemilih <?= $paslon['nama_ketua'].' & '.$paslon['nama_wakil'] ?></h1>
    </div>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="card card-info">

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Pemilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach ($row as $pemilih) { ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $pemilih['nama'] ?></td>
                                    </tr>
                                <?php $no++;
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

</section>
<?= $this->endSection() ?>