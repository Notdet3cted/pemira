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
        <?php foreach ($fak as $fk) { ?>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="text-white">Fakultas <?= $fk['label'] ?></h4>
                    </div>
                    <div class="card-body">
                        <div id="accordion-<?= str_replace(' ', '-', $fk['label']) ?>">
                            <?php foreach ($orm as $or) { ?>
                                <div class="accordion">
                                    <div class="accordion-header collapsed" role="button" data-toggle="collapse" data-target="#panel-<?= str_replace(' ', '-', $fk['label']) . '-' . str_replace(' ', '-', $or) ?>" aria-expanded="false">
                                        <h4><?= $or ?></h4>
                                    </div>
                                    <div class="accordion-body collapse" id="panel-<?= str_replace(' ', '-', $fk['label']) . '-' . str_replace(' ', '-', $or) ?>" data-parent="#accordion-<?= str_replace(' ', '-', $fk['label']) ?>" style="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <P><strong>Calon <?= $or ?></strong></P>
                                                <?php switch ($or) {
                                                    case 'DPM UNIVERSITAS':
                                                        foreach ($dpmu as $dpmuniv) {
                                                            echo '<p>' . $dpmuniv['nama'] . '</p>';
                                                        }
                                                        break;

                                                    case 'DPM FAKULTAS':
                                                        switch ($fk['label']) {
                                                            case 'Teknik':
                                                                foreach ($dpmf['DPMFT'] as $dpmteknik) {
                                                                    echo '<P>' . $dpmteknik['nama'] . '</p>';
                                                                }
                                                                break;
                                                            case 'Ekonomi dan Bisnis':
                                                                foreach ($dpmf['DPMFEB'] as $dpmteknik) {
                                                                    echo '<P>' . $dpmteknik['nama'] . '</p>';
                                                                }
                                                                break;
                                                            case 'Keguruan dan Ilmu Pendidikan':
                                                                foreach ($dpmf['DPMFKIP'] as $dpmteknik) {
                                                                    echo '<P>' . $dpmteknik['nama'] . '</p>';
                                                                }
                                                                break;
                                                            case 'Pertanian':
                                                                foreach ($dpmf['DPMFPT'] as $dpmteknik) {
                                                                    echo '<P>' . $dpmteknik['nama'] . '</p>';
                                                                }
                                                                break;
                                                            case 'Psikologi':
                                                                foreach ($dpmf['DPMFPSI'] as $dpmteknik) {
                                                                    echo '<P>' . $dpmteknik['nama'] . '</p>';
                                                                }
                                                                break;
                                                            case 'Hukum':
                                                                foreach ($dpmf['DPMFH'] as $dpmteknik) {
                                                                    echo '<P>' . $dpmteknik['nama'] . '</p>';
                                                                }
                                                                break;
                                                        }
                                                        break;

                                                    case 'BEM UNIVERSITAS':
                                                        foreach ($bemu as $bemuniv) {
                                                            echo '<p>' . $bemuniv['nama_ketua'] . ' & ' . $bemuniv['nama_wakil'] . '</p>';
                                                        }
                                                        break;

                                                    case 'BEM FAKULTAS':
                                                        switch ($fk['label']) {
                                                            case 'Teknik':
                                                                foreach ($bemf['BEMFT'] as $bemteknik) {
                                                                    echo '<P>' . $bemteknik['nama_ketua'] . ' & ' . $bemteknik['nama_wakil'] . '</p>';
                                                                }
                                                                break;
                                                            case 'Ekonomi dan Bisnis':
                                                                foreach ($bemf['BEMFEB'] as $bemteknik) {
                                                                    echo '<P>' . $bemteknik['nama_ketua'] . ' & ' . $bemteknik['nama_wakil'] . '</p>';
                                                                }
                                                                break;
                                                            case 'Keguruan dan Ilmu Pendidikan':
                                                                foreach ($bemf['BEMFKIP'] as $bemteknik) {
                                                                    echo '<P>' . $bemteknik['nama_ketua'] . ' & ' . $bemteknik['nama_wakil'] . '</p>';
                                                                }
                                                                break;
                                                            case 'Pertanian':
                                                                foreach ($bemf['BEMFPT'] as $bemteknik) {
                                                                    echo '<P>' . $bemteknik['nama_ketua'] . ' & ' . $bemteknik['nama_wakil'] . '</p>';
                                                                }
                                                                break;
                                                            case 'Psikologi':
                                                                foreach ($bemf['BEMFPSI'] as $bemteknik) {
                                                                    echo '<P>' . $bemteknik['nama_ketua'] . ' & ' . $bemteknik['nama_wakil'] . '</p>';
                                                                }
                                                                break;
                                                            case 'Hukum':
                                                                foreach ($bemf['BEMFH'] as $bemteknik) {
                                                                    echo '<P>' . $bemteknik['nama_ketua'] . ' & ' . $bemteknik['nama_wakil'] . '</p>';
                                                                }
                                                                break;
                                                        }
                                                        break;
                                                }
                                                ?>

                                            </div>
                                            <div class="col-md-6">
                                                <P><strong>Total Suara</strong></P>
                                                <?php switch ($or) {
                                                    case 'DPM UNIVERSITAS':
                                                        foreach ($dpmu as $dpmuniv) {
                                                            echo '<p><a href="' . site_url('vote/dpm/DPMU/') . $fk['kode'] . '/' . $dpmuniv['id'] . '">' . count($suara->where(['fakultas' => $fk['kode'], 'id_paslon' => $dpmuniv['id'], 'ormawa' => 'DPMU'])->findAll()) . '</a></p>';
                                                        }
                                                        break;
                                                    case 'DPM FAKULTAS':
                                                        switch ($fk['label']) {
                                                            case 'Teknik':
                                                                foreach ($dpmf['DPMFT'] as $dpmteknik) {
                                                                    echo '<p><a href="' . site_url('vote/dpm/') . $dpmteknik['ormawa'] . '/' . $dpmteknik['id'] . '">' . count($suara->where(['fakultas' => $fk['kode'], 'id_paslon' => $dpmteknik['id'], 'ormawa' => $dpmteknik['ormawa']])->findAll()) . '</a></p>';
                                                                }
                                                                break;
                                                            case 'Ekonomi dan Bisnis':
                                                                foreach ($dpmf['DPMFEB'] as $dpmteknik) {
                                                                    echo '<p><a href="' . site_url('vote/dpm/') . $dpmteknik['ormawa'] . '/' . $dpmteknik['id'] . '">' . count($suara->where(['fakultas' => $fk['kode'], 'id_paslon' => $dpmteknik['id'], 'ormawa' => $dpmteknik['ormawa']])->findAll()) . '</a></p>';
                                                                }
                                                                break;
                                                            case 'Keguruan dan Ilmu Pendidikan':
                                                                foreach ($dpmf['DPMFKIP'] as $dpmteknik) {
                                                                    echo '<p><a href="' . site_url('vote/dpm/') . $dpmteknik['ormawa'] . '/' . $dpmteknik['id'] . '">' . count($suara->where(['fakultas' => $fk['kode'], 'id_paslon' => $dpmteknik['id'], 'ormawa' => $dpmteknik['ormawa']])->findAll()) . '</a></p>';
                                                                }
                                                                break;
                                                            case 'Pertanian':
                                                                foreach ($dpmf['DPMFPT'] as $dpmteknik) {
                                                                    echo '<p><a href="' . site_url('vote/dpm/') . $dpmteknik['ormawa'] . '/' . $dpmteknik['id'] . '">' . count($suara->where(['fakultas' => $fk['kode'], 'id_paslon' => $dpmteknik['id'], 'ormawa' => $dpmteknik['ormawa']])->findAll()) . '</a></p>';
                                                                }
                                                                break;
                                                            case 'Psikologi':
                                                                foreach ($dpmf['DPMFPSI'] as $dpmteknik) {
                                                                    echo '<p><a href="' . site_url('vote/dpm/') . $dpmteknik['ormawa'] . '/' . $dpmteknik['id'] . '">' . count($suara->where(['fakultas' => $fk['kode'], 'id_paslon' => $dpmteknik['id'], 'ormawa' => $dpmteknik['ormawa']])->findAll()) . '</a></p>';
                                                                }
                                                                break;
                                                            case 'Hukum':
                                                                foreach ($dpmf['DPMFH'] as $dpmteknik) {
                                                                    echo '<p><a href="' . site_url('vote/dpm/') . $dpmteknik['ormawa'] . '/' . $dpmteknik['id'] . '">' . count($suara->where(['fakultas' => $fk['kode'], 'id_paslon' => $dpmteknik['id'], 'ormawa' => $dpmteknik['ormawa']])->findAll()) . '</a></p>';
                                                                }
                                                                break;
                                                        }
                                                        break;
                                                    case 'BEM UNIVERSITAS':
                                                        foreach ($bemu as $bemuniv) {
                                                            echo '<p><a href="' . site_url('vote/bem/BEMU/') . $fk['kode'] . '/' . $bemuniv['id'] . '">' . count($suara->where(['fakultas' => $fk['kode'], 'id_paslon' => $bemuniv['id'], 'ormawa' => 'BEMU'])->findAll()) . '</a></p>';
                                                        }
                                                        break;
                                                    case 'BEM FAKULTAS':
                                                        switch ($fk['label']) {
                                                            case 'Teknik':
                                                                foreach ($bemf['BEMFT'] as $bemteknik) {
                                                                    echo '<p><a href="' . site_url('vote/bem/') . $bemteknik['ormawa'] . '/' . $bemteknik['id'] . '">' . count($suara->where(['fakultas' => $fk['kode'], 'id_paslon' => $bemteknik['id'], 'ormawa' => $bemteknik['ormawa']])->findAll()) . '</a></p>';
                                                                }
                                                                break;
                                                            case 'Ekonomi dan Bisnis':
                                                                foreach ($bemf['BEMFEB'] as $bemteknik) {
                                                                    echo '<p><a href="' . site_url('vote/bem/') . $bemteknik['ormawa'] . '/' . $bemteknik['id'] . '">' . count($suara->where(['fakultas' => $fk['kode'], 'id_paslon' => $bemteknik['id'], 'ormawa' => $bemteknik['ormawa']])->findAll()) . '</a></p>';
                                                                }
                                                                break;
                                                            case 'Keguruan dan Ilmu Pendidikan':
                                                                foreach ($bemf['BEMFKIP'] as $bemteknik) {
                                                                    echo '<p><a href="' . site_url('vote/bem/') . $bemteknik['ormawa'] . '/' . $bemteknik['id'] . '">' . count($suara->where(['fakultas' => $fk['kode'], 'id_paslon' => $bemteknik['id'], 'ormawa' => $bemteknik['ormawa']])->findAll()) . '</a></p>';
                                                                }
                                                                break;
                                                            case 'Pertanian':
                                                                foreach ($bemf['BEMFPT'] as $bemteknik) {
                                                                    echo '<p><a href="' . site_url('vote/bem/') . $bemteknik['ormawa'] . '/' . $bemteknik['id'] . '">' . count($suara->where(['fakultas' => $fk['kode'], 'id_paslon' => $bemteknik['id'], 'ormawa' => $bemteknik['ormawa']])->findAll()) . '</a></p>';
                                                                }
                                                                break;
                                                            case 'Psikologi':
                                                                foreach ($bemf['BEMFPSI'] as $bemteknik) {
                                                                    echo '<p><a href="' . site_url('vote/bem/') . $bemteknik['ormawa'] . '/' . $bemteknik['id'] . '">' . count($suara->where(['fakultas' => $fk['kode'], 'id_paslon' => $bemteknik['id'], 'ormawa' => $bemteknik['ormawa']])->findAll()) . '</a></p>';
                                                                }
                                                                break;
                                                            case 'Hukum':
                                                                foreach ($bemf['BEMFH'] as $bemteknik) {
                                                                    echo '<p><a href="' . site_url('vote/bem/') . $bemteknik['ormawa'] . '/' . $bemteknik['id'] . '">' . count($suara->where(['fakultas' => $fk['kode'], 'id_paslon' => $bemteknik['id'], 'ormawa' => $bemteknik['ormawa']])->findAll()) . '</a></p>';
                                                                }
                                                                break;
                                                        }
                                                        break;
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>


</section>
<!-- /.content -->
<?= $this->endSection(); ?>