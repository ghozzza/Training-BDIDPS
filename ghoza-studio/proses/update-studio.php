<?php
require_once('../config.php');

//tangkap inputan user
$id = $_GET['id'];
$nama_studio = $_POST['nama_studio'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];


$linkgambar = 'img/'.$gambar;

//simpan query
$query = "UPDATE studio SET nama_studio='$nama_studio', gambar='$linkgambar', deskripsi='$deskripsi', harga='$harga' WHERE id='$id'";

if ($query = mysqli_query($koneksi, $query)) {
    header('location: ../index.php#portfolio');
} else {
    echo "Error: Terjadi Kesalahan?status=error";
}


    // $nama = $_POST['nama'];
    // $nim = $_POST['nim'];
    // $asal = $_POST['asal'];
    // $jeniskelamin = $_POST['jeniskelamin'];
    

    // include('hasil.php');
