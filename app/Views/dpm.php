<?= $this->extend('home') ?>
<?= $this->section('isi') ?>

<section class="section">

    <div class="row">
        <?php foreach ($kandidat as $kdd) { ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="chocolat-parent">
                            <div data-crop-image="250" style="overflow: hidden; position: relative; height: 285px;">
                                <img alt="image" src="<?= base_url("assets/stisla/img/example-image.jpg") ?>" class="img-fluid">
                            </div>
                        </div>
                        <h4 class="text-center">
                            <a href="" id="paslon" data-toggle="modal" data-target="#modalpaslon" data-nama="<?= $kdd['nama'] ?>" data-nim="<?= $kdd['nim'] ?>" data-prodi="<?= $kdd['prodi'] ?>" data-fakultas="<?= $kdd['fakultas'] ?>">
                                <?= $kdd['nama'] ?>
                            </a>
                        </h4>

                        <div class="mt-4 text-center">
                            <p>
                                <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseVisi" aria-expanded="false" aria-controls="collapseVisi">
                                    Visi
                                </button>
                                <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseMisi" aria-expanded="false" aria-controls="collapseMisi">
                                    Misi
                                </button>
                            </p>

                        </div>
                        <div class="collapse" id="collapseVisi">
                            <p>
                                <strong>Visi</strong>
                                <?= $kdd['visi'] ?>
                            </p>
                        </div>
                        <div class="collapse" id="collapseMisi">
                            <p>
                                <strong>Misi</strong>
                                <?= $kdd['misi'] ?>
                            </p>
                        </div>
                        <button class="btn btn-block btn-success tombol-vote" data-paslon=<?= $kdd['id'] ?> data-pemilih="<?= session('id_pemilih') ?>" data-nama="<?= $kdd['nama'] ?>" type="button"><i class="fa fa-check"></i> Vote</button>

                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Button trigger modal -->

</section>

<!-- Modal -->
<div class="modal fade" id="modalpaslon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="author-box">
                    <div class="author-box-left">
                        <img alt="image" src="<?= base_url("assets/stisla/img/avatar/avatar-1.png") ?>" class="author-box-picture">
                        <div class="clearfix"></div>
                    </div>
                    <div class="author-box-details">
                        <div class="author-box-job">Nama Mahasiswa</div>
                        <div class="author-box-name">
                            <p class="text-primary" id="nama"><strong>Bayu PS</strong></p>
                        </div>
                        <div class="author-box-job">Fakultas / Prodi</div>
                        <div class="author-box-name">
                            <p class="text-primary" id="fakultas"><strong>Teknik / Teknik Informatika</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('click', '#paslon', function() {
            var nama = $(this).data('nama');
            var fakultas = $(this).data('fakultas') + " / " + $(this).data('prodi')
            $('#nama').text(nama);
            $('#fakultas').text(fakultas);
            $('#modal-item').modal('hide');
        })
    })
</script>

<?= $this->endSection() ?>