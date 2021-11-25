<?= $this->extend('template') ?>

<?= $this->section("content") ?>
<section class="section">
    <div class="section-header">
        <h1>Input Data Calon Ketua BEM</h1>
    </div>
</section>

<section class="section-body">

    <div class="card card-success">
        <div class="card-body">
            <form action="<?= site_url('admin/bem/import') ?>" method="POST" enctype="multipart/form-data">
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
                        <label for="nim_ketua">NIM Ketua</label>
                        <input id="nim_ketua" type="number" value="<?= $row != "" ? $row["nim_ketua"] : "" ?>" class="form-control" name="nim_ketua" autofocus="">
                    </div>
                    <div class="form-group col-6">
                        <label for="nama_ketua">Nama Ketua</label>
                        <input id="nama_ketua" type="text" value="<?= $row != "" ? $row["nama_ketua"] : "" ?>" class="form-control" name="nama_ketua">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="fakultas_ketua">Fakultas Ketua</label>
                        <select name="fakultas_ketua" id="fakultas_ketua" required class="form-control">
                            <option class="form-control" value=""> Pilih Fakultas </option>
                            <?php foreach ($fakultas as $fak) { ?>
                                <option class="form-control" <?= ($row != "" and $row["fakultas_ketua"] == $fak['label']) ? 'selected = "selected"'  : '' ?> value="<?= $fak['label'] ?>"> Fakultas <?= $fak['label'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="prodi_ketua">Prodi Ketua</label>
                        <select name="prodi_ketua" id="prodi_ketua" required class="form-control">
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
                    <div class="col-md-4 text-center">
                        <img width="200" height="200" alt="image" src="<?= $row != "" ? base_url('upload') . '/' . $row['foto_ketua'] : base_url('upload/1.jpg') ?>" id="img-preview-ketua" class="img-foto img-fluid">
                    </div>
                    <div class="form-group col-6">
                        <label>Foto Calon Ketua Bem</label>
                        <input type="file" name="foto_ketua" <?= $row != "" ? "" : "required" ?> id="input-foto-ketua" onchange="previewketua()" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="nim_wakil">NIM Wakil</label>
                        <input id="nim_wakil" type="number" value="<?= $row != "" ? $row["nim_wakil"] : "" ?>" class="form-control" name="nim_wakil" autofocus="">
                    </div>
                    <div class="form-group col-6">
                        <label for="nama_wakil">Nama Wakil</label>
                        <input id="nama_wakil" type="text" value="<?= $row != "" ? $row["nama_wakil"] : "" ?>" class="form-control" name="nama_wakil">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="fakultas_wakil">Fakultas Wakil</label>
                        <select name="fakultas_wakil" id="fakultas_wakil" required class="form-control">
                            <option class="form-control" value=""> Pilih Fakultas </option>
                            <?php foreach ($fakultas as $fak) { ?>
                                <option class="form-control" <?= ($row != "" and $row["fakultas_wakil"] == $fak['label']) ? 'selected = "selected"'  : '' ?> value="<?= $fak['label'] ?>"> Fakultas <?= $fak['label'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="prodi_wakil">Prodi Wakil</label>
                        <select name="prodi_wakil" id="prodi_wakil" required class="form-control">
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
                    <div class="col-md-4 text-center">
                        <img width="200" height="200" alt="image" src="<?= $row != "" ? base_url('upload') . '/' . $row['foto_wakil'] : base_url('upload/1.jpg') ?>" id="img-preview-wakil" class="img-foto img-fluid">
                    </div>
                    <div class="form-group col-6">
                        <label>Foto Calon Wakil Bem</label>
                        <input type="file" name="foto_wakil" id="input-foto-wakil" onchange="previewwakil()" <?= $row != "" ? "" : "required" ?>class="form-control">
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
                                <option class="form-control" <?= ($row != "" and $row["ormawa"] == $orm['kode']) ? 'selected = "selected"'  : '' ?> value="<?= $orm['kode'] ?>"> BEM <?= $orm['label'] ?> </option>
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
                        <img width="200" height="200" alt="image" src="<?= $row != "" ? base_url('upload') . '/' . $row['foto_paslon'] : base_url('upload/1.jpg') ?>" id="img-preview-pasangan" class="img-foto img-fluid">
                    </div>
                    <div class="form-group col-6">
                        <label>Foto Calon Pasangan BEM</label>
                        <input type="file" name="foto_pasangan" id="input-foto-pasangan" onchange="previewpasangan()" <?= $row != "" ? "" : "required" ?> class="form-control">
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

    function previewketua() {
        const foto = document.querySelector('#input-foto-ketua')
        const preview = document.querySelector('#img-preview-ketua')

        const fileFoto = new FileReader()

        fileFoto.readAsDataURL(foto.files[0]);
        fileFoto.onload = function(e) {
            preview.src = e.target.result
        }
    }

    function previewwakil() {
        const foto = document.querySelector('#input-foto-wakil')
        const preview = document.querySelector('#img-preview-wakil')

        const fileFoto = new FileReader()

        fileFoto.readAsDataURL(foto.files[0]);
        fileFoto.onload = function(e) {
            preview.src = e.target.result
        }
    }

    function previewpasangan() {
        const foto = document.querySelector('#input-foto-pasangan')
        const preview = document.querySelector('#img-preview-pasangan')

        const fileFoto = new FileReader()

        fileFoto.readAsDataURL(foto.files[0]);
        fileFoto.onload = function(e) {
            preview.src = e.target.result
        }
    }
</script>

<?= $this->endSection() ?>