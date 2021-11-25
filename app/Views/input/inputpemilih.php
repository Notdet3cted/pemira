<?= $this->extend('template') ?>

<?= $this->section("content") ?>
<section class="section">
    <div class="section-header">
        <h1>Input Data Pemilih Tetap</h1>
    </div>
</section>

<section class="section-body">

    <div class="card card-success">
        <div class="card-body">
            <form action="<?= site_url('admin/pemilih/import') ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="row">
                    <div class="col-md-4">
                        <input type="file" class="form-control" accept=".xls, .xlsx" name="fileexcel" />
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-success"> Import Data </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="card card-primary">
        <div class="card-body">
            <form method="POST">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="nim">NIM</label>
                        <input id="nim" type="number" class="form-control" name="nim" autofocus="">
                    </div>
                    <div class="form-group col-6">
                        <label for="nama">Nama</label>
                        <input id="nama" type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="fakultas">Fakultas</label>
                        <select name="fakultas" id="fakultas" required class="form-control">
                            <option class="form-control" value=""> Pilih Fakultas </option>
                            <option class="form-control" value="FT"> Fakultas Teknik </option>
                            <option class="form-control" value="FEB"> Fakultas Ekonomi dan Bisnis </option>
                            <option class="form-control" value="FKIP"> Fakultas Keguruan dan Ilmu Pendidikan</option>
                            <option class="form-control" value="FH"> Fakultas Hukum</option>
                            <option class="form-control" value="FPT"> Fakultas Pertanian</option>
                            <option class="form-control" value="FPSI"> Fakultas Psikologi </option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="prodi">Prodi</label>
                        <select name="prodi" id="prodi" required class="form-control">
                            <option class="form-control" value=""> Pilih Prodi </option>
                            <?php
                            $prodi = ['TI', 'SI', 'TE', 'TM', 'TIND', 'MNJ', 'AKT', 'BK', 'FMIPA', 'PBSI'];

                            foreach ($prodi as $pr) {
                            ?>
                                <option class="form-control" value="<?= $pr ?>"> <?= $pr ?> </option>

                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="password">Password</label>
                        <input name="password" id="password" class="form-control" type="text" required>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<?= $this->endSection() ?>