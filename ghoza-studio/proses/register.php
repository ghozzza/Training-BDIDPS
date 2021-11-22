<?php
require_once('../config.php');

//tangkap inputan user
$id = $_GET['id'];
$nama = $_GET['nama'];

$query = "INSERT INTO user (id, nama) VALUE ('$id', '$nama')";

if ($query = mysqli_query($koneksi, $query)) {
    header('location: ../index.php');
} else {
    echo "Error: Terjadi Kesalahan?status=error";
}
