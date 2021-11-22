<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ghoza Studios</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Imperial - v5.6.1
  * Template URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php
    $cek = session()->get('ID');
    ?>
    <h1>hello world</h1>
    
    <h1>
        <a href="<?= base_url('studio/tambah') ?>">tambah</a>
    </h1>

    <?php if ($cek) { ?>
        <h1>Selamat datang, <?= session()->get('First_Name'); ?></h1>
        <h1>
            <a href="<?= base_url('login/logout') ?>">logout</a>
        </h1>
    <?php } else {

    ?><h1>
            <a href="<?= base_url('login') ?>">login</a>
        </h1>
    <?php } ?>
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">

                            <h5 class="card-title">Default Table</h5>
                            <a href="<?= base_url('/studio/tambah') ?>" class="btn btn-primary">Tambah data</a>
                        </div>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">id Studio</th>
                                    <th scope="col">id user</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $i => $d) {
                                ?>
                                    <tr>
                                        <td width="30" class="text-center"><?= $i + 1; ?></td>
                                        <td><?= $d['id']; ?></td>
                                        <td><?= $d['id_studio']; ?></td>
                                        <td><?= $d['id_user']; ?></td>
                                        <td><?= $d['catatan']; ?></td>
                                        <td><?= $d['jam']; ?></td>
                                        <td><?= $d['durasi']; ?></td>
                                        <td><?= $d['tanggal']; ?></td>
                                        <td class="col-2 text-center justify-content-between">
                                            <a href="<?= base_url('/studio/edit/' . $d['id']) ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?= base_url('/studio/delete/' . $d['id']) ?>" class="btn btn-danger">Delete</a>
                                            <a href="<?= base_url('/transaksi/' . $d['id']) ?>" class="btn btn-danger">Booking</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>