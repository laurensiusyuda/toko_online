<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>Toko Online</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">
    <!-- Bootstrap core CSS -->

    <!-- memanggil base_url untuk menggunakan template bootstrap yang telah kita buat (pada folder public) -->
    <link href="<?= base_url('bootstrap-4.0.0/dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 5rem;
        }
        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>

</head>

<body>
    <!-- untuk menambahkan layout navbar yang kita gunakan -->
    <!-- untuk mengedit navbar bisa langsung pada navbar -->
    <?= $this->include('layout/navbar') ?>

    <main role="main" class="container">
        <?= $this->renderSection('content'); ?>
    </main>

    <!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('bootstrap-4.0.0/dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('jquery-3.6.0.min.js  ') ?>"></script>
</body>

</html>