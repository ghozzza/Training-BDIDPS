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

    <form action="<?= base_url('transaksi/store') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="inputAddress">Id studio</label>
            <input type="hidden" class="form-control" name="id_studio" id="inputAddress" value="<?= $data2['id'] ?>">
        </div>
        <div class="form-group">
            <label for="inputAddress">Id User</label>
            <input type="hidden" class="form-control" name="id_user" id="inputAddress" value="<?= session()->get('ID'); ?>">
        </div>
        <div class="form-group">
            <label for="inputAddress">Catatan</label>
            <input type="text" name="catatan" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Jam</label>
            <select class="custom-select my-1 mr-sm-2" name="jam" id="inlineFormCustomSelectPref">
                <option selected>Choose...</option>
                <option value="1">12</option>
                <option value="2">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputAddress">durasi</label>
            <input type="number" class="form-control" name="durasi" id="inputAddress" placeholder="Durasi">
        </div>
        <script>
            $('.datepicker').datepicker({
                startDate: new Date()
            });
        </script>
        <div class="form-group">
            <label for="inputAddress2">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="startDate" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-group text-center">
            <a href="<?= base_url('/studio') ?>" class="btn btn-md btn-danger">Kembali</a>
            <button type="submit" class="btn btn-md btn-success">Submit</button>
            <hr>
        </div>
    </form>


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