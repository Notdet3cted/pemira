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
                                <th>NIM Ketua</th>
                                <th>Nama Ketua</th>
                                <th>Fakultas Ketua</th>
                                <th>Prodi Ketua</th>
                                <th>NIM Wakil</th>
                                <th>Nama Wakil</th>
                                <th>Fakultas Wakil</th>
                                <th>Prodi Wakil</th>
                                <th>Nomor Urut</th>
                                <th>Ormawa</th>
                                <th>Visi</th>
                                <th>Misi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($row as $bem) { ?>
                                <tr>
                                    <td><?= $bem['id'] ?></td>
                                    <td><?= $bem['nim_ketua'] ?></td>
                                    <td><?= $bem['nama_ketua'] ?></td>
                                    <td><?= $bem['fakultas_ketua'] ?></td>
                                    <td><?= $bem['prodi_ketua'] ?></td>
                                    <td><?= $bem['nim_wakil'] ?></td>
                                    <td><?= $bem['nama_wakil'] ?></td>
                                    <td><?= $bem['fakultas_wakil'] ?></td>
                                    <td><?= $bem['prodi_wakil'] ?></td>
                                    <td><?= $bem['nourut'] ?></td>
                                    <td><?= $bem['ormawa'] ?></td>
                                    <td><?= $bem['visi'] ?></td>
                                    <td><?= $bem['misi'] ?></td>
                                    <td class="project-actions text-right">
                                        <a href="<?= site_url('admin/bem/input/') . $bem['id'] ?>" class="btn btn-info btn-sm">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm tombol-hapus" data-nama="<?= $bem['nama_ketua'] . " & " . $kdd['nama_wakil'] ?>" href="<?= site_url('admin/bem/delete/') . $bem['id']; ?>">
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