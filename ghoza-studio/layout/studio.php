 <!-- ======= Portfolio Section // equipment studio ======= -->
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
                             <a href="proses/edit.php?id=<?php $data["id"] ?>" title="Edit"><i class="bi bi-pencil-square"></i></a>
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