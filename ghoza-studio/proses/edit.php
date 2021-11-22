<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Menambah Studio</title>
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
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Imperial - v5.6.1
  * Template URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php
    require_once("../config.php");
    ?>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="../index.php" class="logo mr-auto"><img src="../img/logo.png" alt=""></a>
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1 class="logo mr-auto"><a href="index.html">Imperial</a></h1> -->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Edit</h2>
                    <ol>
                        <li><a href="../index.php">Home</a></li>
                        <li>Edit</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <!-- <div class="form-group">
                    <label>ID Kategori</label>
                    <input type="text" name="id_kategori" id="id_kategori" class="form-control" placeholder="Isi ID Kategori">
                </div> -->
                <!-- nama studio, gambar, desc, harga -->
                <div class="form-group mb-3">
                    <?php
                    $parameter = $_GET['id'];
                    $query = "SELECT * FROM studio WHERE id =" . $parameter;
                    if ($query = mysqli_query($koneksi, $query)) {
                        $row = $query->fetch_assoc();
                    }
                    ?>
                    <form action="update-studio.php?id=<?php echo $parameter; ?>" method="post">
                        <label>Nama Studio</label>
                        <input type="text" name="nama_studio" id="nama_kategori" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                    <textarea class="form-control" type="text" name="deskripsi" id="exampleFormControlTextarea1" value="<?php echo $row['deskripsi']; ?>"></textarea>
                </div>
                <div class="row">
                    <div class="col-1">
                        <div class="form-group mb-3">
                            <label>Harga</label>
                            <input type="text" name="harga" id="nama_kategori" class="form-control" placeholder="IDR" disabled>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group mb-3">
                            <label></label>
                            <input type="number" step="1" name="harga" id="nama_kategori" class="form-control" value="<?php echo $row['harga']; ?>" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto studio</label>
                            <input class="form-control" name="gambar" type="file" id="formFile" value="<?php echo $row['gambar']; ?>" required>
                            <p>Pastikan ukuran foto 800x600px</p>
                            <br>
                            <!-- fotooooolololololo -->
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group text-center">
                    <a href="../index.php#portfolio" class="btn btn-md btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-md btn-success">Submit</button>
                    <hr>
                </div>
                </form>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        &copy; Copyright <strong>Imperial Theme</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
          -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/typed.js/typed.min.js"></script>


    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>