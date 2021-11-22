<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Setting - Ghoza Studios</title>
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
    include 'config.php';
    ?>
    <?php
    session_start();
    $cek = count($_SESSION);
    $ID = $_SESSION["ID"];
    if ($cek != 0) {
        $ID;
        $sql = mysqli_query($koneksi, "SELECT * FROM register where ID='$ID' ");
        $row  = mysqli_fetch_array($sql);
    ?>
        <!-- Navbar -->
        <?php
        include('layout/navbar-setting.php');
        ?>
        <!-- isian -->
        <div class="container">
            <div class="signup-form">
                <form action="home.php" method="post" enctype="multipart/form-data">
                    <img class="mt-5" src="upload/<?php echo $row['File'] ?>" height="150" width="150" style="border-radius:50%;display:block;margin-left:auto;margin-right:auto;" />
                    <h1 class="text-center">Hallo, <?php echo $row["First_Name"] ?></h1>
                <?php
            }
                ?>
                </form>
            </div>
        </div>

        <!-- form setting -->

        <main id="main">


            <section class="inner-page">
                <div class="container">
                    <?php
                    $parameter = $ID;
                    $query = "SELECT * FROM register WHERE ID=" . $parameter;
                    if ($query = mysqli_query($koneksi, $query)) {
                        $row = $query->fetch_assoc();
                    }
                    ?>

                    <form action="update-setting.php?ID=<?php echo $parameter; ?>" method="post" enctype="multipart/form-data">
                        <h2>Setting</h2>
                        <p class="hint-text">Edit Biodata</p>
                        <div class="form-group mb-4">
                            <div class="row">
                                <div class="col"><input type="text" class="form-control" name="First_Name" value="<?php echo $row['First_Name']; ?>" required="required"></div>
                                <div class="col"><input type="text" class="form-control" name="Last_Name" value="<?php echo $row['Last_Name']; ?>" required="required"></div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <input type="email" class="form-control" name="Email" value="<?php echo $row['Email']; ?>" required="required">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" name="Password" placeholder="Password" required="required">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" name="CPassword" placeholder="Confirm Password" required="required">
                        </div>
                        <div class="form-group mb-4">
                            <input type="file" name="file" required>
                            <!-- <input type="submit" name="upload" value="Upload" class="btn"> -->
                        </div>
                        <div class="form-group">
                            <label class="form-check-label mb-4"><input type="checkbox" required="required"> Anda yakin dengan perubahan diatas?</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="save" class="btn btn-warning btn-lg btn-block">Konfirmasi</button>
                        </div>
                    </form>
                    <form action="update-setting.php?ID=<?php echo $parameter; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group mt-4">
                            <button type="submit" name="save" class="btn btn-danger btn-lg btn-block">Hapus Akun</button>
                        </div>
                    </form>
                </div>
            </section>

        </main><!-- End #main -->

        <br>
        <br>
        <br>
        <br>
        <!-- footer -->

        <?php
        include('layout/footer.php');
        ?>

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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