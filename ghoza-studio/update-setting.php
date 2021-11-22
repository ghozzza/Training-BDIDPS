<?php
include("config.php");
session_start();
// $sql=mysqli_query($koneksi,"SELECT * FROM register where Email='$email'");
// if(mysqli_num_rows($sql)>0)
// {
//     echo "Email Id Already Exists"; 
// 	exit;
// }

//tangkap inputan user
$id = $_GET['ID'];
$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$file = $_POST['File'];

$file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$folder = "upload/";
$new_file_name = strtolower($file);
$final_file = str_replace(' ', '-', $new_file_name);
$ency = md5($Password);

$query = "UPDATE register SET First_Name='$First_Name', Last_Name='$Last_Name', Email='$Email', Password='$ency', File='$final_file' WHERE ID='$id'";
// $sql = mysqli_query($koneksi, $query) or die("Could Not Perform the Query");


if (move_uploaded_file($file_loc, $folder . $final_file)) {
    if ($query = mysqli_query($koneksi, $query)) {
        header("Location: setting.php?status=success");
    } else {
        echo "Error: Terjadi Kesalahan?status=error";
    }
} else {
    echo "Error.Please try again";
}
