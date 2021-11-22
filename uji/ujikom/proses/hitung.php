<?php

    // Ini adalah fungsi untuk menghitung luas persegi
    function persegi($sisi)
    {
        return $sisi * $sisi;
    }

    // Ini adalah fungsi untuk menghitung luas segitiga
    function segitiga($alas, $tinggi)
    {
        return 0.5 * $alas * $tinggi;
    }

    // Ini adalah fungsi untuk menghitung luas lingkaran
    function lingkaran($jari_jari)
    {
        return number_format((pi() * ($jari_jari * $jari_jari)), 2);
    }
?>