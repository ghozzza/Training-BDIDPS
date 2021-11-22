<?php include('config.php')?>
<?php
$query = "SELECT * FROM studio";
if ($query = mysqli_query($koneksi, $query)) {
    while ($data = mysqli_fetch_array($query)) {
?>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="<?php echo $data["gambar"]; ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4><?php echo $data["nama_studio"]; ?> </h4>
                <p class="col-7"><?php echo $data["deskripsi"]; ?></p>
                <a href="<?php echo $data["gambar"] ?>" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.php?id=<?php echo $data["id"] ?>" class="details-link" title="More Details"><i class="bi bi-link">asdas</i></a>
                <a href="proses/edit.php?id='<?php $data["id"] ?>'" title="Edit"><i class="bi bi-pencil-square"></i></a>
                <a href="proses/delete-studio.php?id='<?php echo $data["id"] ?>'" title="Delete"><i class="bi bi-trash"></i></a>
                <a href="#"><i class="bi bi-bag"></i></a>

            </div>
        </div>
<?php
    }
}
?>

<?php
            $query = "SELECT * FROM studio";
            if ($query = mysqli_query($koneksi, $query)) {
              while ($data = mysqli_fetch_array($query)) {
                echo '
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="' . $data["gambar"] . '" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>' . $data["nama_studio"] . '</h4>
                <p class="col-7">' . $data["deskripsi"] . '</p>
                <a href="' . $data["gambar"] . '" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.php?id=' . $data["id"] . '"class="details-link" title="More Details"><i class="bi bi-link"></i></a>
                <a href="proses/edit.php?id=' . $data["id"] . '" title="Edit"><i class="bi bi-pencil-square"></i></a>
                <a href="proses/delete-studio.php?id=' . $data["id"] . '" title="Delete"><i class="bi bi-trash"></i></a>
                <a href="#"><i class="bi bi-bag"></i></a>
                
                </div>
                </div>
                ';
              }
            }
            ?>