<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <title><?= $judul; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Pusat Konfirmasi & Koordinasi Covid-19</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active ">
                        <a class="nav-link js-scroll-trigger text-white" href="<?= base_url(); ?>">BERANDA <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href="<?= base_url('lapor'); ?>">LAPOR COVID-19</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4"><span class="font-weight-bold">SELAMAT DATANG</span></h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-5">Protokol Kesehatan Covid-19 yang Baru! <br><span class="font-weight-bold">Akibat Penularan Melalui Udara</span></h2>
                    <hr class="my-4">
                    <a class="btn btn-primary btn-lg font-weight-bold" role="button" data-toggle="modal" data-target="#info1">Selengkapnya</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- modal info -->
    <div class="modal fade" id="info1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Info Covid</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Nah, terkait cara baru penularan Covid-19 melalui udara, PDPI mengimbau agar masyarakat tidak panik dan mengikuti protokol kesehatan tambahan seperti yang diimbau berikut ini :<br>
                        1. Tetap waspada dan tidak panik.<br>
                        2. Hindari keramaian baik itu tempat tertutup maupun tempat terbuka.<br>
                        3. Gunakan masker di mana saja dan kapan saja bahkan dalam ruangan.<br>
                        4. Ciptakan ruangan dengan ventilasi yang baik seperti, membuka jendela sesering mungkin.<br>
                        5. Tetap jaga kebersihan tangan serta hindari menyentuh bagian wajah sebelum mencuci tangan.<br>
                        6. Selalu terapkan jaga jarak pada aktivitas sehari-hari.<br>
                        Selain itu Juru Bicara Pemerintah untuk Penanganan COVID-19 Achmad Yurianto juga menyoroti mengenai penggunaan Face Shield atau penutup wajah berbahan plastik atau mika untuk mencegah penularan Covid-19 yang kian marak belakangan ini. Dia mengimbau agar penggunaan face shield harus dibarengi dengan masker.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>