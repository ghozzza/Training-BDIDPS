<?php
    require_once('../config.php');

    //tangkap inputan user
    $id = $_GET['id'];
    // $nama_kategori = $_POST['nama_kategori'];

    //simpan query
    $query = "DELETE FROM studio where id = '$id'";

    if($query = mysqli_query($koneksi, $query)){
        header('location: ../index.php#portfolio');
    } else {
        echo "Error: Terjadi Kesalahan?status=error";
    }
?>