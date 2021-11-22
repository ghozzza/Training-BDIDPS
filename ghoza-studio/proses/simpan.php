<?php
require_once('../config.php');

//tangkap inputan user
// $id = $_GET['id'];
$nama_studio = $_POST['nama_studio'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];
// $link = copy('$gambar', '../img/');
// $gambar = $_FILES['gambar']['name'];
// $tmp = $_FILES['gambar']['tmp_name'];

// $imagenew = date('amYHis') . $link;
// $path = "../img/" . $imagenew;
// $link_image = $path;

// if (!move_uploaded_file($tmp, $path)) {
//     echo "Upload File Gagal";
// }

$linkgambar = 'img/'.$gambar;

//simpan query
$query = "INSERT INTO studio (nama_studio, gambar, deskripsi, harga) VALUE ('$nama_studio', '$linkgambar', '$deskripsi', '$harga')";

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
