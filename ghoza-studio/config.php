<?php

//inisiasi variabel koneksi
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME', 'ghoza_studio');
   

    //proses koneksi ke database

    $koneksi = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    //cek koneksi
    if ($koneksi === false)  {
        die("ERROR: TIDAK BISA KONEK". mysqli_connect_error());
    }
    // else{
    //     echo "koneksi berhasil";
    // }
?>