<?= $this->extend('layouts/master.php') ?>

<?= $this->section('content') ?>
<?php
$cek = session()->get('ID');
?>
<section id="services">
    <?php
    if ($cek != 0) {
    ?>

        <div class="container">
            <div class="signup-form">
                <form action="home.php" method="post" enctype="multipart/form-data">
                    <img class="mt-5" src="<?= base_url('assets/upload/register/' . session()->get('File')); ?>" height="150" width="150" style="border-radius:50%;display:block;margin-left:auto;margin-right:auto;" />
                    <h1 class="text-center">Hallo, <?= session()->get("First_Name") ?></h1>
                </form>
            </div>
        </div>
    <?php } ?>

    <div class="container mt-5">
        <div class="row" data-aos="fade-up">
            <div class="col-md-12">
                <h3 class="section-title">Layanan Kami</h3>
                <div class="section-title-divider"></div>
            </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 service-item">
                <div class="service-icon"><i class="bi bi-briefcase"></i></div>
                <h4 class="service-title"><a href="">Lorem Ipsum</a></h4>
                <p class="service-description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="service-icon"><i class="bi bi-card-checklist"></i></div>
                <h4 class="service-title"><a href="">Dolor Sitema</a></h4>
                <p class="service-description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="service-icon"><i class="bi bi-bar-chart"></i></div>
                <h4 class="service-title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="service-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="service-icon"><i class="bi bi-binoculars"></i></div>
                <h4 class="service-title"><a href="">Magni Dolores</a></h4>
                <p class="service-description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="service-icon"><i class="bi bi-brightness-high"></i></div>
                <h4 class="service-title"><a href="">Nemo Enim</a></h4>
                <p class="service-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="service-icon"><i class="bi bi-calendar4-week"></i></div>
                <h4 class="service-title"><a href="">Eiusmod Tempor</a></h4>
                <p class="service-description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
        </div>
    </div>
</section><!-- End Services Section -->

<section id="studio">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Studio</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <a href="<?= base_url('/studio/tambah') ?>" target="_blank" class="btn btn-md btn-primary mb-3">Add New</a>
                </div>
            </div>
            <div class="row portfolio-container">
                <?php
                foreach ($data as $i => $d) {
                ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="<?= base_url('assets/upload/studio/' . $d['gambar']); ?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><?php echo $d['nama_studio']; ?> </h4>
                            <p class="col-7"><?php echo 'IDR ' . $d['harga']; ?></p>
                            <a href="<?php base_url('assets/upload/studio/' . $d['gambar']); ?>" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.php?id=<?php echo $d['id'] ?>" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                            <a href="<?= base_url('/studio/edit/' . $d['id']); ?>" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="<?= base_url('/studio/delete/' . $d['id']); ?>" title="Delete"><i class="bi bi-trash"></i></a>
                            <?php
                            if ($cek != 0) {
                            ?>
                                <a href="booking.php?id=<?php echo $d["id"] ?>" title="Books"><i class="bi bi-bag"></i></a>
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
                ?>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection() ?>