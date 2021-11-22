 <!-- ======= Hero Section ======= -->
 <section id="hero">
     <div class="hero-container">
         <div data-aos="fade-in">
             <div class="hero-logo">
                 <img class="" src="<?= base_url('img/logo.png');?>" alt="Imperial" style="width:100px">
             </div>

             <h1>Welcome to Ghoza studios</h1>
             <h2>We serve <span class="typed" data-typed-items="high quality, good service, best place"></span></h2>
             <div class="actions">
                 <?php
                    $cek = session()->get('ID');
                    ?>
                 <?php
                    if ($cek != 0) {
                    ?>
                     <p style="color: white;">Ingin keluar?</p>
                     <a href="<?= base_url('login/logout') ?>" class="btn-get-started">Logout</a>
                     <a href="#" class="btn-warning">Setting</a>
                 <?php } else { ?>
                     <a href="<?= base_url('login') ?>" class="btn-get-started">Sign in</a>
                     <a href="<?= base_url('register') ?>" class="btn-services">Sign up</a>
                 <?php } ?>
             </div>
         </div>
     </div>
 </section><!-- End Hero -->