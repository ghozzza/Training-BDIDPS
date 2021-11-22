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
  include 'config.php';
  ?>
  <?php
  session_start();
  $cek = count($_SESSION);
  if ($cek != 0) {
    $ID = $_SESSION["ID"];
    $sql = mysqli_query($koneksi, "SELECT * FROM register where ID='$ID' ");
    $row  = mysqli_fetch_array($sql);
  ?>

  <?php
  }
  ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div data-aos="fade-in">
        <div class="hero-logo">
          <img class="" src="img/logo.png" alt="Imperial" style="width:100px">
        </div>

        <h1>Welcome to Ghoza studios</h1>
        <h2>We serve <span class="typed" data-typed-items="high quality, good service, best place"></span></h2>
        <div class="actions">
          <?php
          if ($cek != 0) {
          ?>
            <p style="color: white;">Ingin keluar?</p>
            <a href="logout.php" class="btn-get-started">Logout</a>
            <a href="setting.php" class="btn-warning">Setting</a>
          <?php } else { ?>
            <a href="loginpage/login.php" class="btn-get-started">Sign in</a>
            <a href="loginpage/register.php" class="btn-services">Sign up</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- Navbar -->
  <?php
  include('layout/navbar.php');
  ?>
  <?php
  if ($cek != 0) {
  ?>

    <div class="container">
      <div class="signup-form">
        <form action="home.php" method="post" enctype="multipart/form-data">
          <img class="mt-5" src="upload/<?php echo $row['File'] ?>" height="150" width="150" style="border-radius:50%;display:block;margin-left:auto;margin-right:auto;" />
          <h1 class="text-center">Hallo, <?php echo $row["First_Name"] ?></h1>
        </form>
      </div>
    </div>
  <?php } ?>

  <main id="main">
    <!-- About -->
    <?php
    include('layout/about.php');
    ?>
    <!-- Service -->
    <?php
    include('layout/service.php');
    ?>

    <!-- subscribe -->
    <?php
    include('layout/subscribe.php')
    ?>

    <!-- studioa -->
    <section id="portfolio">
     <div class="container" data-aos="fade-up">
         <div class="row">
             <div class="col-md-12">
                 <h3 class="section-title">Studio</h3>
                 <div class="section-title-divider"></div>
                 <p class="section-description">Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
             </div>
         </div>

         <div class="row">
             <a href="proses/create.php" target="_blank" class="btn btn-md btn-primary mb-3">Add New</a>
         </div>

         <div class="row portfolio-container">
             <?php
                $query = "SELECT * FROM studio";
                if ($query = mysqli_query($koneksi, $query)) {
                    while ($data = mysqli_fetch_array($query)) {
                ?>

                     <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                         <img src="<?php echo $data["gambar"]; ?>" class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h4><?php echo $data["nama_studio"]; ?> </h4>
                             <p class="col-7"><?php echo 'IDR ' . $data["harga"]; ?></p>
                             <a href="<?php echo $data["gambar"] ?>" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-plus"></i></a>
                             <a href="portfolio-details.php?id=<?php echo $data["id"] ?>" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                             <a href="proses/edit.php?id=<?php echo $data["id"] ?>" title="Edit"><i class="bi bi-pencil-square"></i></a>
                             <a href="proses/delete-studio.php?id=<?php echo $data["id"] ?>" title="Delete"><i class="bi bi-trash"></i></a>
                             <?php
                                if ($cek != 0) {
                                ?>
                                 <a href="booking.php?id=<?php echo $data["id"] ?>" title="Books"><i class="bi bi-bag"></i></a>
                             <?php
                                } else {
                                ?>
                                 <a href="login.php" title="Books"><i class="bi bi-bag"></i></a>
                             <?php
                                }
                                ?>

                         </div>
                     </div>
             <?php
                    }
                }
                ?>
         </div>
     </div>
 </section><!-- End Portfolio Section -->
    <!-- testimoni -->
    <?php
    include('layout/testimoni.php');
    ?>

    <!-- team -->

    <?php
    include('layout/team.php');
    ?>
    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Contact Us</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
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