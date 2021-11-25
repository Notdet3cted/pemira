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
            <form action="<?= site_url('admin/dpm/import') ?>" method="POST" enctype="multipart/form-data">
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
            <form method="POST" action="<?= $action ?>" enctype="multipart/form-data">
                <div class="row">
                    <?= csrf_field() ?>
                    <input type="hidden" value="<?= $row != "" ? $row["id"] : "" ?>" name="id">
                    <div class="form-group col-6">
                        <label for="nim">NIM</label>
                        <input id="nim" type="number" value="<?= $row != "" ? $row["nim"] : "" ?>" class="form-control" name="nim" autofocus="">
                    </div>
                    <div class="form-group col-6">
                        <label for="nama">Nama</label>
                        <input id="nama" type="text" value="<?= $row != "" ? $row["nama"] : "" ?>" class="form-control" name="nama">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="fakultas">Fakultas</label>
                        <select name="fakultas" id="fakultas" required class="form-control">
                            <option class="form-control" value=""> Pilih Fakultas </option>
                            <?php foreach ($fakultas as $fak) { ?>
                                <option class="form-control" <?= ($row != "" and $row["fakultas"] == $fak['label']) ? 'selected = "selected"'  : '' ?> value="<?= $fak['label'] ?>"> Fakultas <?= $fak['label'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="prodi">Prodi</label>
                        <select name="prodi" id="prodi" required class="form-control">
                            <option class="form-control" value=""> Pilih Prodi </option>
                            <?php
                            $prodi = ['TI', 'SI', 'TE', 'TM', 'TInd', 'Manajemen', 'Akuntansi', 'BK', 'PGSD', 'PBSI', 'PBI', 'PEMAT', 'IH', 'Agroteknologi', 'Psikologi'];

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
                        <input id="nourut" type="number" value="<?= $row != "" ? $row["nourut"] : "" ?>" class="form-control" name="nourut" autofocus="">
                    </div>
                    <div class="form-group col-6">
                        <label for="ormawa">Ormawa</label>
                        <select id="ormawa" class="form-control" name="ormawa" required>
                            <option class="form-control" value="">Pilih Ormawa</option>
                            <?php foreach ($ormawa as $orm) { ?>
                                <option class="form-control" <?= ($row != "" and $row["ormawa"] == $orm['kode']) ? 'selected = "selected"'  : '' ?> value="<?= $orm['kode'] ?>"> DPM <?= $orm['label'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <textarea id="snvisi" name="visi"><?= $row != "" ? $row["visi"] : "" ?></textarea>
                    </div>
                    <div class="form-group col-6">
                        <textarea id="snmisi" name="misi"><?= $row != "" ? $row["misi"] : "" ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img width="300" height="300" alt="image" src="<?= $row != "" ? base_url('upload') . '/' . $row['foto_dpm'] : base_url('upload/1.jpg') ?>" id="img-preview" class="img-foto img-fluid">
                    </div>
                    <div class="form-group col-6">
                        <label>Foto Calon Ketua DPM</label>
                        <input type="file" name="foto" id="input-foto" onchange="preview()" class="form-control">
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        <?= $button ?>
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

    function preview() {
        const foto = document.querySelector('#input-foto')
        const preview = document.querySelector('#img-preview')

        const fileFoto = new FileReader()

        fileFoto.readAsDataURL(foto.files[0]);
        fileFoto.onload = function(e) {
            preview.src = e.target.result
        }
    }
</script>

<?= $this->endSection() ?>