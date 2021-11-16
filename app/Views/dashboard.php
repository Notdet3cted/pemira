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
                        <h4 class="text-white">Fakultas <?= $fk ?></h4>
                    </div>
                    <div class="card-body">
                        <div id="accordion-<?= str_replace(' ', '-', $fk) ?>">
                            <?php foreach ($orm as $or) { ?>
                                <div class="accordion">
                                    <div class="accordion-header collapsed" role="button" data-toggle="collapse" data-target="#panel-<?= str_replace(' ', '-', $fk) . '-' . str_replace(' ', '-', $or) ?>" aria-expanded="false">
                                        <h4><?= $or ?></h4>
                                    </div>
                                    <div class="accordion-body collapse" id="panel-<?= str_replace(' ', '-', $fk) . '-' . str_replace(' ', '-', $or) ?>" data-parent="#accordion-<?= str_replace(' ', '-', $fk) ?>" style="">
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
                                                        switch ($fk) {
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
                                                            case 'Psikolog':
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

                                                    case 'BEM UNIVERISTAS':
                                                        foreach ($dpmu as $dpmuniv) {
                                                            $dpmuniv['nama'];
                                                        }
                                                        break;

                                                    default:
                                                        # code...
                                                        break;
                                                }
                                                ?>

                                            </div>
                                            <div class="col-md-6">
                                                <P><strong>Total Suara</strong></P>
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