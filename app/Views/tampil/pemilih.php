<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1> Data Pemilih</h1>
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
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Fakultas</th>
                                    <th>Hak Pilih</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($row as $pemilih) { ?>
                                    <tr>
                                        <td><?= $pemilih['id'] ?></td>
                                        <td><?= $pemilih['nim'] ?></td>
                                        <td><?= $pemilih['nama'] ?></td>
                                        <td><?= $pemilih['fakultas'] ?></td>
                                        <td>
                                            <?php
                                            if ($pemilih['status'] == 0) {

                                                echo '<span class="badge badge-danger"> Belum </span>';
                                            } else {
                                                echo '<span class="badge badge-success"> Sudah </span>';
                                            }
                                            ?>
                                        </td>
                                        <td class="project-actions text-right">
                                            <a href="<?= site_url('admin/pemilih/input/') . $pemilih['id'] ?>" class="btn btn-info btn-sm">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm tombol-hapus" data-nama=<?= $pemilih['nama'] ?> href="<?= site_url('admin/pemilih/delete/') . $pemilih['id']; ?>">
                                                <i class="fas fa-trash">
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
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