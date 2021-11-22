<?php
// extract($_POST);
include("config.php");
// $sql=mysqli_query($koneksi,"SELECT * FROM register where ID='$id'");
// $id = $_SESSION['ID'];

$id = $_GET['ID'];
$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$pass = $_POST['Pass'];
$Email = $_POST['Email'];
$File = $_POST['File'];

$File = rand(1000, 100000) . "-" . $_FILES['File']['name'];
$file_loc = $_FILES['File']['tmp_name'];
$folder = "upload/";
$new_file_name = strtolower($file);
$final_file = str_replace(' ', '-', $new_file_name);
$ency = md5($pass);

if (move_uploaded_file($file_loc, $folder . $final_file)) {
    $query = "UPDATE register SET First_Name='$first_name', Last_Name='$Last_Name', Email='$Email', Password='$ency', File='$final_file' WHERE ID'$id'";
    $sql = mysqli_query($koneksi, $query) or die("Could Not Perform the Query");
    header("Location: setting.php?status=success");
} else {
    echo "Error.Please try again";
}


// if (mysqli_num_rows($sql) > 0) {
//     echo "Email Id Already Exists";
//     exit;
// } else (isset($_POST['save'])); {
//     $file = rand(1000, 100000) . "-" . $_FILES['File']['name'];
//     $file_loc = $_FILES['File']['tmp_name'];
//     $folder = "upload/";
//     $new_file_name = strtolower($file);
//     $final_file = str_replace(' ', '-', $new_file_name);
//     $ency = md5($pass);
//     if (move_uploaded_file($file_loc, $folder . $final_file)) {
//         // $query="INSERT INTO register(First_Name, Last_Name, Email, Password, File ) VALUES ('$first_name', '$last_name', '$email', '$ency', '$final_file')";
//         $query = "UPDATE register SET First_Name='$first_name', Last_Name='$Last_Name', Email='$Email', Password='$ency', File='$final_file' WHERE id='$id'";
//         $sql = mysqli_query($koneksi, $query) or die("Could Not Perform the Query");
//         header("Location: setting.php?status=success");
//     } else {
//         echo "Error.Please try again";
//     }
// }
