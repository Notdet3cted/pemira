<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <form action="<?= site_url('admin/importExcel') ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="file" name="fileexcel" accept=".xls, .xlsx">
                <button type="submit"> tekan</button>
            </form>
        </div>
        <hr>
        <hr>
        <hr>
        <div class="row">
            <form action="<?= site_url('admin/post') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="form-group">
                    <input type="file" class="form-control" name="gambar" />
                </div>
                <div class="form-group">
                    <textarea id="summernote" name="summer"></textarea>
                </div>
                <button type="submit"> tekan</button>
            </form>

            <?php foreach($coba as $cb) {?>
                <p><?= $cb['summer'] ?></p>
                <?php }?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
</body>

</html>