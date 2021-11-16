<?= $this->extend('template') ?>

<?= $this->section("content") ?>
<section class="section">
    <div class="section-header">
        <h1>Input Data Calon Ketua DPM</h1>
    </div>
</section>

<section class="section-body">

<div class="card card-success">
    <div class="card-body">
        <form action="<?= site_url('dpm/import') ?>" method="POST" enctype="multipart/form-data" >
        <?= csrf_field() ?>
        <div class="row">
            <div class="col-md-4">
                <input type="file" class="form-control" accept=".xls, .xlsx" name="fileexcel" />
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success"> Import Data </button>
            </div>
        </div>
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
                        <label for="nourut">No.urut</label>
                        <input id="nourut" type="number" class="form-control" name="nourut" autofocus="">
                    </div>
                    <div class="form-group col-6">
                        <label for="ormawa">Ormawa</label>
                        <select id="ormawa" class="form-control" name="ormawa" required>
                            <option class="form-control" value="">Pilih Ormawa</option>
                            <option class="form-control" value="DPMU">DPM Universitas</option>
                            <option class="form-control" value="DPMFT">DPM FT</option>
                            <option class="form-control" value="DPMFEB">DPM FEB</option>
                            <option class="form-control" value="DPMFKIP">DPM FKIP</option>
                            <option class="form-control" value="DPMFPT">DPM FAPERTA</option>
                            <option class="form-control" value="DPMUFH">DPM FH</option>
                            <option class="form-control" value="DPMUFPSI">DPM FPsikolog</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <textarea id="snvisi" name="visi"></textarea>
                    </div>
                    <div class="form-group col-6">
                        <textarea id="snmisi" name="misi"></textarea>
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('#snmisi').summernote();
        $('#snvisi').summernote();
    });
</script>

<?= $this->endSection() ?>