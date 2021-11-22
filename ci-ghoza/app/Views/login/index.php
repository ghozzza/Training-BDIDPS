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
    <h1>hello world, aku halaman login</h1>
    <h1>
        <a href="<?= base_url('/studio') ?>">Kembali</a>
    </h1>
    <main id="main">

        <section class="inner-page">
            <div class="container">
                <form action="<?= base_url(); ?>/login/proses" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group mb-3">
                        <label>Email</label>
                        <input type="email" name="Email" id="Email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="password" name="Password" id="Password" class="form-control" placeholder="Password" required>
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <a href="<?= base_url('/studio') ?>" class="btn btn-md btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-md btn-success">Submit</button>
                        <hr>
                    </div>
                </form>
            </div>
        </section>

    </main><!-- End #main -->



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